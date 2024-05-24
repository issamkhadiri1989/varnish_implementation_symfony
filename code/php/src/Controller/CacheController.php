<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\Cache;
use Symfony\Component\Routing\Attribute\Route;

class CacheController extends AbstractController
{
    #[Route('/cache', name: 'app_cache')]
    #[Cache(public: true, maxage: 3600, mustRevalidate: true)]
    public function index(): Response
    {
        return $this->render('cache/index.html.twig', [
            'controller_name' => 'CacheController',
        ]);
    }
}
