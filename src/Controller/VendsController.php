<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VendsController extends AbstractController
{
	/**
	 * @Route("/vends", name="vends.index")
	 */

    public function index()
    {

        return $this->render('vends/index.html.twig', );
    }
}
