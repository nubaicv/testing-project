<?php

// src/Controller/HomeController.php

namespace App\Controller;

class HomeController extends BaseController {

    public function index() {
        
        return $this->render("home.html.twig", [
            "title" => $this->translator->trans("Inicio"),
            "locales" => $this->locales
        ]);
    }
}
