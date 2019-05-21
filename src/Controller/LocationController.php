<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LocationController extends AbstractController
{
	/**
	 * @Route("/location", name="location.index")
	 */

    public function index()
    {

        return $this->render('location/index.html.twig', );
    }
}