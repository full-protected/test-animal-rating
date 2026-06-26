<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageAccessTest extends WebTestCase
{
    public function testHomePageReturns200(): void
    {
        $client = static::createClient([], ['HTTP_ACCEPT_LANGUAGE' => 'en']);
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Rate your favourite animal');
    }

    public function testAdminPageReturns200(): void
    {
        $client = static::createClient([], ['HTTP_ACCEPT_LANGUAGE' => 'en']);
        $client->request('GET', '/admin');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Animal Statistics');
    }
}
