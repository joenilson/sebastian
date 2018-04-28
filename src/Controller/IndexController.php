<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index", options={"menu"="admin", "submenu"="", "description"="home"})
     */
    public function index()
    {


        $menu = $this->generateMenu();

        return $this->render('index/index.html.twig', [
            'controller_name' => __CLASS__,
            'menu'=>$menu
        ]);
    }

    /**
     * @Route("/route-map", name="route_map", options={"menu"="admin", "submenu"="", "description"="Mapa de Menu"})
     */
    public function routeMap()
    {

    }

    public function generateMenu()
    {
        $router = $this->container->get('router');
        $collection = $router->getRouteCollection();
        $routeList = $collection->all();
        $menu = [];
        $mainMenu = new \stdClass();
        foreach ($routeList as $route)
        {
            if($route->getOption('menu'))
            {
                $mainMenu->menu = $route->getOption('menu');
                $mainMenu->items[$route->getOption('menu')][] = [
                    'path' => $route->getPath(),
                    'name' => $route->getOption('description')
                ];
                $menu[] = $mainMenu;
            }
        }

        return $menu;
    }
}
