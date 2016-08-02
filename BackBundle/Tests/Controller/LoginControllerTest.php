<?php

namespace AppBundle\BackBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $container = $kernel->getContainer();

        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('_submit')->form(array(
            '_username' => "e",
            '_password' => "e",
        ));
        $client->submit($form);

//        var_dump($client->getResponse()->getContent());

        $this->assertTrue($client->getResponse()->isRedirect());

    }
}
