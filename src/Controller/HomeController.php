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
        return $this->render("home/index.html.twig");
    }

        /**
     * @Route("/experience", name="experience")
     */
    public function experience(): Response
    {
        return $this->render("home/experience.html.twig");
    }
         /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render("home/portfolio.html.twig");
    }
          /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render("home/presentation.html.twig");
    }
}
