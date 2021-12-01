<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'salut',
        ]);
    }
	/**
     * @Route("/actu", name="actu")
     */
    public function actu(): Response
    {
        return $this->render('home/actu.html.twig', [
            'controller_name' => 'salut',
        ]);
    }
	/**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'salut',
        ]);
    }
}
