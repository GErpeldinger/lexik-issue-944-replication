<?php

declare(strict_types=1);

namespace App\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route(path: '/login', methods: Request::METHOD_POST)]
    public function login(): JsonResponse
    {
        return new JWTAuthenticationFailureResponse();
    }
}
