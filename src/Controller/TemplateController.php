<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /**
     * @Route("", name="template")
     */
    public function index()
    {
        $router = $this->get('router');
        $routes = $router->getRouteCollection();

     /*   foreach ($routes as $route) {
            $this->convertController($route);
        }
*/

        return $this->render('template/index.html.twig', [
            'controller_name' => 'TemplateController',
            'routes' => $routes
        ]);
    }





    /**
     * @Route("/topbar", name="topbar")
     */
    public function topbar(): Response
    {
        return $this->render('topbar.html.twig');
    }

    /**
     * @Route("/aside", name="aside")
     */
    public function aside(): Response
    {

        return $this->render('aside.html.twig');
    }

    /**
     * @Route("/footerbar", name="footerbar")
     */
    public function footerbar(): Response
    {
        return $this->render('footerbar.html.twig');
    }

}
