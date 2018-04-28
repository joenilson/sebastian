<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login", options={"menu"="admin", "submenu"="", "description"="Login"})
     */
    public function login()
    {
        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/logout", name="logout", options={"menu"="admin", "submenu"="", "description"="Logout"})
     */
    public function logout()
    {
        $this->redirect('login');
    }


}
