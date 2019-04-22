<?php

// src/Controller/ArticleController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class ArticleController extends BaseController {

    public function show($article_title, Request $request) {
        
        return $this->render("show-article.html.twig", [
            "title" => $this->translator->trans("Ler artigo"),
            "article_title" => $article_title,
        ]);
    }
    
    public function lista(Request $request) {
        
        $article_name = "My first article";
        
        $url = $this->generateUrl(
            "show-article",
            ["year" => "2019", "article_title" => "my-first-article", "_format" => "html", "section" => "section1"]
        );
        
        return $this->render("list-articles.html.twig", [
            "title" => $this->translator->trans("Lista de artigos"),
            "article_name" => $article_name,
            "url" => $url,
        ]);
    }
}
