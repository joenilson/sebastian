<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PurchasesController extends Controller
{
    /**
     * @Route("/supplier", name="suppliers", options={"menu"="purchases", "submenu"="", "description"="Suplidores"})
     */
    public function supplier()
    {
        return $this->render('purchases/index.html.twig', [
            'controller_name' => 'PurchasesController',
        ]);
    }
    /**
     * @Route("/purchase-order", name="purchase_orders", options={"menu"="purchases", "submenu"="", "description"="Ordenes de Compra"})
     */
    public function purchaseOrder()
    {
        return $this->render('purchases/index.html.twig', [
            'controller_name' => 'PurchasesController',
        ]);
    }
}
