<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController {

    public function index(Request $request) {
        
        $locale = $request->getLocale();
        
        return $this->render("home.html.twig", [
            "title" => $this->translator->trans("Inicio"),
            "in_session" => $locale
        ]);
    }
}
