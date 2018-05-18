<?php

namespace App\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/api/test", name="api_test")
     */
    public function index()
    {
        return $this->json(['name' => 'gaofei', 'age' => 23], 200, $header = ['Access-Control-Allow-Origin' => '*', 'Access-Control-Allow-Headers' => 'Content-Type']);
    }
}
