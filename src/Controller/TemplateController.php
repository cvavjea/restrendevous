<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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





    private function convertController(\Symfony\Component\Routing\Route $route)
    {
        $nameParser = $this->get('controller_name_converter');
        if ($route->hasDefault('_controller')) {
            try {
                $route->setDefault('_controller', $nameParser->build($route->getDefault('_controller')));
            } catch (\InvalidArgumentException $e) {
            }
        }
    }
}
