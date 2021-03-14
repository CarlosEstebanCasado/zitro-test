<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexTest extends WebTestCase
{
    /**
     * Index route is always redirected to /login
     */
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET','/');

        $this->assertResponseRedirects('/login');
    }
}