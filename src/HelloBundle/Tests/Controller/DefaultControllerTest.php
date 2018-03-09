<?php

namespace HelloBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello_world');

        $this->assertTrue($crawler->filter('html:contains("Hello 1234")')->count() > 0);
    }
}
