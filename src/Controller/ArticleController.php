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
     $articles =
         [
             '1' =>
                 [
                     "title" => "la vaccination c'est genial",
                     "content" => "blablabla",
                     "id" => 1
                 ],
         '2' =>
                 [
                     "title" => "le cheval c'est trop genial",
                     "content" => "blablabla",
                     "id" => 2
                 ],
         '3' =>
                 [
                     "title" => "le cheval c'est nul ",
                     "content" => "blablabla",
                     "id" => 3
                 ]

     ];
    return $this->render('articlelist.html.twig',[
      'articles'=> $articles
    ]);
     //retourne une reponse http valide
     return new Response('article');
 }
    /**
     * @Route("/article/{id}", name="articlshow")
     */
 public function articleShow($id)
 {
     $articles =
         [
             '1' =>
                 [
                     "title" => "la vaccination c'est genial",
                     "content" => "blablabla",
                     "id" => 1
                 ],
             '2' =>
                 [
                     "title" => "le cheval c'est trop genial",
                     "content" => "blablabla",
                     "id" => 2
                 ],
             '3' =>
                 [
                     "title" => "le cheval c'est nul ",
                     "content" => "blablabla",
                     "id" => 3
                 ]

         ];

     return $this->render('articleshow.html.twig', [
         'article' => $articles[$id]
     ]);

//if(array_key_exists($id , $articles)){


//}else{
 //   return $this->redirectToRoute("home");
//}



 }
}