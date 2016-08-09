<?php

namespace AppBundle\BackBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlackControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $container = $kernel->getContainer();

        $client = static::createClient();
        $s = $container->get('back_office.loging');
        $s->logIn($client);

        // Create a new entry in the database
        $crawler = $client->request('GET', '/admin');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /admin");


    }
}
