<?php

declare(strict_types=1);

namespace App\Tests\Functional\Controller;

use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class LoginControllerTest extends WebTestCase
{
    public function testLogin(): void
    {
        $client = static::createClient();
        $client->request(method: Request::METHOD_POST, uri: '/login');

        self::assertInstanceOf(JWTAuthenticationFailureResponse::class, $client->getResponse());
    }
}
