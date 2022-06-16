<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    
    /**
     * @Route("/hello", name="hello_world")
     */
    public function hello(Request $request)
    {

        $response = new Response ("hello helloooo");
        return $response;
    }
}

