<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(LoggerInterface $logger): Response
    {
        $logger->alert('alert', ['a' => 'b']);
        $logger->log(LogLevel::INFO, 'alert', ['a' => 'b']);
        $logger->info('My logger is now ready');
        return $this->render('base.html.twig', [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}
