<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PageController
{
    /**
     * @Route("/", name="home")
     */

  public function home(){

    $request = Request::createFromGlobals();
    $sent = $request->query->get('sent');

    if($sent === 'yes'){
        return new Response('merci pour le formulaire');
    }else{
        return new Response('formulaire');
    }

  }

    /**
     * @Route("/mention", name="mention")
     */

  public function mention(){
      //retourne une reponse http valide
      return new Response('mention-legales');
  }
}