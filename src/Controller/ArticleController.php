<?php

// src/Controller/ArticleController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController {
    

    public function show(TranslatorInterface $translator, $article_title) {
        
        return $this->render("show-article.html.twig", [
            "title" => $translator->trans("Ler artigo"),
            "article_title" => $article_title,
        ]);
    }
    
    public function lista(TranslatorInterface $translator) {
        
        $article_name = "My first article";
        
        $url = $this->generateUrl(
            "show-article",
            ["year" => "2019", "article_title" => "my-first-article", "_format" => "html", "section" => "section1"]
        );
        
        return $this->render("list-articles.html.twig", [
            "title" => $translator->trans("Lista de artigos"),
            "article_name" => $article_name,
            "url" => $url,
        ]);
    }
}
