<?php

namespace App\Controller;

use App\Entity\Commisariat;
use App\Form\CommisariatType;
use App\Repository\CommisariatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commisariat")
 */
class CommisariatController extends AbstractController
{
    /**
     * @Route("/", name="commisariat_index", methods={"GET"})
     */
    public function index(CommisariatRepository $commisariatRepository): Response
    {
        return $this->render('commisariat/index.html.twig', [
            'commisariats' => $commisariatRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="commisariat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $commisariat = new Commisariat();
        $form = $this->createForm(CommisariatType::class, $commisariat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commisariat);
            $entityManager->flush();

            return $this->redirectToRoute('commisariat_index');
        }

        return $this->render('commisariat/new.html.twig', [
            'commisariat' => $commisariat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commisariat_show", methods={"GET"})
     */
    public function show(Commisariat $commisariat): Response
    {
        return $this->render('commisariat/show.html.twig', [
            'commisariat' => $commisariat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commisariat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commisariat $commisariat): Response
    {
        $form = $this->createForm(CommisariatType::class, $commisariat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commisariat_index');
        }

        return $this->render('commisariat/edit.html.twig', [
            'commisariat' => $commisariat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commisariat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Commisariat $commisariat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commisariat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commisariat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commisariat_index');
    }
}
