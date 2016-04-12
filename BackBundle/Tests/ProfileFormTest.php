<?php

namespace AppBundle\BackBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfileFormTest extends WebTestCase
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
        $crawler = $client->request('GET', '/profile/edit');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /profile/edit");

//        var_dump($client->getResponse()->getContent());

        $form = $crawler->selectButton('Create')->form(array(
            'rest_user_profile[firstname]'  => 'plup',
            'rest_user_profile[lastname]'  => 'plap',
            'rest_user_profile[current_password]'  => 'test',
        ));

        $client->submit($form);
        //var_dump($crawler);
        $crawler = $client->followRedirect();
      //  var_dump($client->getResponse()->getContent());

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('p:contains("test")')->count(), 'Missing element td:contains("test")');

    }
}
