<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigController extends Controller
{
    /**
     * @Route("/config", name="config_system", options={"menu"="admin", "submenu"="", "description"="Configuración"})
     */
    public function index()
    {
        return $this->render('config_controlller/index.html.twig', [
            'controller_name' => 'ConfigController',
        ]);
    }

    /**
     * @Route("/profile", name="config_user", options={"menu"="admin", "submenu"="", "description"="Profile"})
     */
    public function profile()
    {

    }
}
