<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(): Response
    {
        return new Response(
            '
            <html>
            <h2>Echouer le plus tot et le plus de fois possible</h2>
            </html>
            '
        );
    }
}
