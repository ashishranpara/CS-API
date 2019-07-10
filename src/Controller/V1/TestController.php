<?php

namespace App\Controller\V1;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends FOSRestController
{
    /**
     * @Route("/v1/test", name="v1_test")
     */
    public function index()
    {
        return $this->render('v1/test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
