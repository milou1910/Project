<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    
    #[Route(path:'/hello', name: 'blog')]

    public function hello()
    {

        $response = new Response ("hello helloooo");
        return $response;
    }
}