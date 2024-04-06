<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        //        return $this->json([
        //            'message' => 'Welcome to your new controller!',
        //            'path' => 'src/Controller/HomeController.php',
        //        ]);
        return $this->render('home.html.twig');
    }

    #[Route('/logout', name: 'logout')]
    public function logout(LoggerInterface $logger): Response
    {
        $logger->info("greetings from logout function!");
        return new Response(
            '<html><body>logout <br>' . $this->generateUrl('home') . '</body></html>'
        );
    }

    #[Route('/app', name: 'app_page')]
    public function page(): Response
    {
        $data = 'raw data';
        $counter = 0;
        return $this->render('app.html.twig', ['data' => $data, 'counter' => $counter]);
    }

    #[Route('/success', name: 'app_success')]
    public function success(): Response
    {
        $user = $this->getUser();
        return $this->render('success.html.twig', ['user' => $user]);
    }
}
