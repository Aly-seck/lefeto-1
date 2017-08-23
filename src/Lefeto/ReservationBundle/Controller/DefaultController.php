<?php

namespace Lefeto\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/reservation")
     */
    public function indexAction()
    {
        return $this->render('LefetoReservationBundle:Default:index.html.twig');
    }
    /**
     * @Route("/panier")
     */
    public function AddAction()
    {
        return $this->render('@LefetoReservation/Offres/add.html.twig');
    }
}
