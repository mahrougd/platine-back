<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventControllerTest extends WebTestCase
{
    public function testOneEvent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/events/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }

    public function testAllEvents()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/events');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }
}
