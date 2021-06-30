<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;


class PageController
{
    /**
     * @Route("/", name="home")
     */

  public function home(){
     var_dump("acceuil");die;
  }

    /**
     * @Route("/mention", name="mention")
     */

  public function mention(){
      var_dump('mention legale');die;
  }
}