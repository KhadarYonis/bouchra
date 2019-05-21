<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
	/**
	 * @Route("/apropos", name="about.index")
	 */

    public function index()
    {

        return $this->render('about_us/index.html.twig', );
    }
}