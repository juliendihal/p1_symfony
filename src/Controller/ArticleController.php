<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
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
$articles = [
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



if(array_key_exists($id , $articles)){
    $article = $articles[$id];
    $concat = "titre : " . $article['title'] . "<br>" . "contenu : " . $article['content'] . "<br>" . "id : " . $article['id'];
    return new Response($concat);

}else{
    return $this->redirectToRoute("home");
}



 }
}