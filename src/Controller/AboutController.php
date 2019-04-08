<?php

// src/Controller/AboutController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController {
    
    /**
     *
     * @Route({
     *      "pt": "/sobre",
     *      "en": "/about",
     *      "fr": "/sur"
     * }, name="about-page")
     */
    public function about() {
        
        return $this->render("about.html.twig", [
        ]);
    }
}