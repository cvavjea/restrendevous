<?php

namespace App\Controller;

use App\Entity\Commisariat;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use function MongoDB\BSON\toJSON;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/user_index_agent", name="user_index_agent", methods={"GET"})
     */
    public function index_agent(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' =>$userRepository->findByOneRole(User::ROLE_AGENT)
        ]);
    }

    /**
     * @Route("/user_index_demandeur", name="user_index_demandeur", methods={"GET"})
     */
    public function index_demandeur(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findByOneRole(User::ROLE_DEMANDEUR)
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $userPasswordEncoder): Response
    {
      //  dump($this->getRefererRoute($request));die();
        $entityManager = $this->getDoctrine()->getManager();
        if ($this->getRefererRoute($request) == 'user_index_agent'){
            $commisariat =  $entityManager->getRepository(Commisariat::class)
            ->findAll();
        }
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setDateAjout(new \DateTime());
            if ($this->getRefererRoute($request) == 'user_index_demandeur'){
                $user->setRoles([User::ROLE_DEMANDEUR]);
            }else{
                $user->setRoles([User::ROLE_AGENT]);
                $user->setCommisariat(
                    $entityManager->getRepository(Commisariat::class)->find($request->get('commissariat'))
                );
            }

                $user->setPassword($userPasswordEncoder->encodePassword($user,$form->get('plainPassword')->getData()));

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('template');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'commissariat' => isset($commisariat)?$commisariat:null,
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        if ($this->getRefererRoute($request) == 'user_index_agent'){
            $commisariat =  $entityManager->getRepository(Commisariat::class)
                ->findAll();
        }


        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->getRefererRoute($request) == 'user_index_agent'){
                $user->setCommisariat(
                    $entityManager->getRepository(Commisariat::class)->find($request->get('commissariat'))
                );
            }

            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('template');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'commissariat' => isset($commisariat)?$commisariat:null,
        ]);
    }




    /**
     * @Route("/{id}/chageToAgent", name="user_chageToAgent", methods={"GET","POST"})
     */
    public function chageToAgent(Request $request, User $user): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user->setRoles([User::ROLE_AGENT]);
        $entityManager->flush();

        return $this->redirectToRoute($this->getRefererRoute($request));
    }


    /**
     * @Route("/{id}/chageToDemandeurs", name="user_chageToDemandeurs", methods={"GET","POST"})
     */
    public function chageToDemandeurs(Request $request, User $user): Response
    {
      //  dump($request->headers->get('referer'));die();
        $entityManager = $this->getDoctrine()->getManager();
        $user->setRoles([User::ROLE_DEMANDEUR]);
        $entityManager->flush();

        return $this->redirectToRoute($this->getRefererRoute($request));
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function getRefererRoute(Request $request)
    {
        //look for the referer route
        $referer = $request->headers->get('referer');

        $lastPath = substr($referer, strpos($referer, $request->getHost()));
        $lastPath = str_replace($request->getHost(), '', $lastPath);

        $matcher = $this->get('router')->getMatcher();
        $parameters = $matcher->match($lastPath);
        $route = $parameters['_route'];

        return $route;
    }

}
