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

        $form = $crawler->selectButton('Sauvegarder')->form(array(
            'rest_user_profile[firstname]'  => 'firstname',
            'rest_user_profile[lastname]'  => 'lastname',
            'rest_user_profile[email]' => 'email@gmail.com',
            'rest_user_profile[current_password]'  => 'password',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('div:contains("email@gmail.com")')->count(), 'Missing element div:contains("email@gmail.com")');

    }
}
