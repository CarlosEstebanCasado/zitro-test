<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testBadLogin()
    {
        $client = static::createClient();

        $client->request('POST','/login',['email' =>'', 'password' => '']);

        $this->assertResponseRedirects('/login');

    }

    public function testLogin()
    {
        $client = static::createClient();

        $client->request('POST','/login',['email' =>'carlos.esteban.casado@gmail.com', 'password' => 'qwerty']);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }

    
    public function testLogout()
    {
        $client = static::createClient();

        $client->request('GET', '/logout');

        $this->assertResponseRedirects('/login');
    }

    public function testLoginAdmin()
    {
        $client = static::createClient();

        $client->request('POST','/login',['email' =>'admin@gmail.com', 'password' => '123456']);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }
}