<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/article", name="artcile")
     */
 public function listeArticle(){
     //retourne une reponse http valide
     return new Response('article');
 }
}