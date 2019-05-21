<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AchatController extends AbstractController
{
	/**
	 * @Route("/achat", name="achat.index")
	 */

    public function index()
    {

        return $this->render('achat/index.html.twig', );
    }
}