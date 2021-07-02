<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


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
$article = [
    '1' => [
       "title" => "la vaccination c'est genial",
        "content" => "blablabla",
        "id" => 1
    ],
    '2' => [
        "title" => "le cheval c'est trop genial",
        "content" => "blablabla",
        "id" => 2
    ],
    '3' => [
        "title" => "le cheval c'est nul ",
        "content" => "blablabla",
        "id" => 3
    ]

];

$article = $article[$id];
 return new Response( $article['title']);
 }
}