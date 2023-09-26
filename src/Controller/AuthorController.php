<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/showAuthor/{name}', name: 'app_author')]
    public function index($name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }
}
