<?php

namespace App\Controller;

use App\Entity\Prendre;
use App\Entity\User;
use App\Form\PrendreType;
use App\Repository\PrendreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/prendre")
 */
class PrendreController extends AbstractController
{
    /**
     * @Route("/", name="prendre_index", methods={"GET"})
     */
    public function index(PrendreRepository $prendreRepository): Response
    {
        return $this->render('prendre/index.html.twig', [
            'prendres' => $prendreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="prendre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $prendre = new Prendre();
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(PrendreType::class, $prendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $max =count(
                $entityManager->getRepository(User::class)
                    ->findByOneRole(User::ROLE_AGENT)
            );
            if ($max == 0){
                $request->getSession()->getFlashBag()->add('notice',
                    [
                        'message' => "Aucun agent nest disponible",
                        'type' => 'danger',
                        'title' => 'Error',

                    ]);
                return $this->redirectToRoute('template');
            }
           $prendre->setDateredevous(new \DateTime());
           $prendre->setDemandeurs($this->getUser());
           $prendre->setAgents(
               $entityManager->getRepository(User::class)->find(
                   random_int(1,$max)
               )
           );
            $entityManager->persist($prendre);
            $entityManager->flush();

            return $this->redirectToRoute('prendre_index');
        }

        return $this->render('prendre/new.html.twig', [
            'prendre' => $prendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prendre_show", methods={"GET"})
     */
    public function show(Prendre $prendre): Response
    {
        return $this->render('prendre/show.html.twig', [
            'prendre' => $prendre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="prendre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Prendre $prendre): Response
    {
        $form = $this->createForm(PrendreType::class, $prendre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prendre_index');
        }

        return $this->render('prendre/edit.html.twig', [
            'prendre' => $prendre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prendre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Prendre $prendre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prendre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($prendre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prendre_index');
    }
}
