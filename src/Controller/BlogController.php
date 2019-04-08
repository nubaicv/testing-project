<?php

// src/Controller/BlogController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController {
    
    /**
     *
     * @Route("/blog/{page}", name="blog-list", requirements={"page"="\d+"})
     */
    public function blog_list($page = 1) {
        
        return $this->render("blog-list.html.twig", [
            "page" => $page,
        ]);
    }
    
    /**
     * 
     * @Route(
     *      "/blog/{_locale}/{year}/{article}.{_format}",
     *      defaults={
     *          "_format": "html"
     *      },
     *      requirements={
     *          "_locale": "pt|en|fr",
     *          "_format": "html|pdf",
     *          "year": "\d+"
     *      },
     *      name="blog_show"
     * )
     */
    public function blog_show($_locale, $year, $article, $_format) {
        
        return $this->render("blog-show.html.twig", [
            "locale" => $_locale,
            "year" => $year,
            "article" => $article,
            "format" => $_format
        ]);
    }
}
