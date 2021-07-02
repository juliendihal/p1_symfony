<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PokerController extends AbstractController
{
    /**
     * @Route("/poker", name="poker")
     */

    public function poker(Request $request)
    {

        $age = $request->query->get('age');

        if ($age >= 18) {
            return new Response('prend un sky ma poule');
        } else {
            return $this->redirectToRoute("digimon");
        }

    }

    /**
     * @Route("/digimon", name="digimon")
     */

    public function digimon()
    {
      return new Response('digimon');
    }

}