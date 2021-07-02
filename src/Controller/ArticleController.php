<?php

namespace App\Controller;
use http\Env\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/articlelist", name="articlelist")
     */
 public function listeArticle()
 {
     //retourne une reponse http valide
     return new Response('article');
 }
    /**
     * @Route("/article/{id}", name="articlshow")
     */
 public function articleShow($id)
 {

 return new Response($id);
 }
}