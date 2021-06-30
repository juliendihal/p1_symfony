<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/article", name="artcile")
     */
 public function listeArticle(){
     var_dump('liste article');die;
 }
}