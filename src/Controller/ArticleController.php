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
                ////COMPILE LE FICHIER TWIG
             return $this->render('articlelist.html.twig',[
                   // RENVOI LES VARIABLES AU FICHIER TWIG
                'articles'=> $articles
             ]);


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
                //COMPILE LE FICHIER TWIG
             return $this->render('articleshow.html.twig', [
                 // RENVOI LES VARIABLES AU FICHIER TWIG
                'article' => $articles[$id]
            ]);





 }
}