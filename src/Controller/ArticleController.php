<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
public $articles =
    [
        '1' =>
        [
            "title" => "la vaccination c'est genial",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "id" => 1
        ],
        '2' =>
        [
            "title" => "le cheval c'est trop genial",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "id" => 2,

        ],
        '3' =>
        [
            "title" => "le cheval c'est nul ",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "id" => 3
        ],
        '4' =>
        [
            "title" => "le cheval c'est nul ",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "id" => 3
        ]

    ];
    /**
     * @Route("/articlelist", name="articlelist")
     */

 public function listeArticle()
 {
                ////COMPILE LE FICHIER TWIG
             return $this->render('articlelist.html.twig',[
                   // RENVOI LES VARIABLES AU FICHIER TWIG
                'articles'=> $this->articles
             ]);


 }
    /**
     * @Route("/article/{id}", name="articlshow")
     */
 public function articleShow($id)
 {

                //COMPILE LE FICHIER TWIG
             return $this->render('articleshow.html.twig',  [
                 // RENVOI LES VARIABLES AU FICHIER TWIG
                'article' => $this->articles[$id]
            ]);

 }
}