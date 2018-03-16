<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
    public function testOneCategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }

    public function testAllCategories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($client->getResponse()->headers->contains('Content-Type', 'application/json'));
    }
}
