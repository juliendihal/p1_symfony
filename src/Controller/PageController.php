<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PageController
{
    /**
     * @Route("/", name="home")
     */

  public function home(){
      //retourne une reponse http valide
      return new Response('home');
  }

    /**
     * @Route("/mention", name="mention")
     */

  public function mention(){
      //retourne une reponse http valide
      return new Response('mention-legales');
  }
}