<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController {
    

    public function index(TranslatorInterface $translator) {

        return $this->render("home.html.twig", [
            "title" => $translator->trans("Inicio"),
        ]);
    }
}
