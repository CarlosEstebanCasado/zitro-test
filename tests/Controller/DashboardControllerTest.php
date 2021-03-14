<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    /**
     * If the user is not authenticated is redirected to login
     */
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET','/dashboard');

        $this->assertResponseRedirects('/login');
    }
}