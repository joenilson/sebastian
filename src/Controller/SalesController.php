<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SalesController extends Controller
{
    /**
     * @Route("/customers", name="customers", options={"menu"="sales", "submenu"="", "description"="Clientes"})
     */
    public function customers()
    {
        return $this->render('sales/index.html.twig', [
            'controller_name' => 'SalesController::customers',
        ]);
    }

    /**
     * @Route("/requirements", name="requirements", options={"menu"="sales", "submenu"="", "description"="Pedidos"})
     */
    public function requirements()
    {
        return $this->render('sales/index.html.twig', [
            'controller_name' => 'SalesController::requirements',
        ]);
    }

    /**
     * @Route("/invoices", name="invoices", options={"menu"="sales", "submenu"="", "description"="Facturas"})
     */
    public function invoices()
    {
        return $this->render('sales/index.html.twig', [
            'controller_name' => 'SalesController::invoices',
        ]);
    }
}
