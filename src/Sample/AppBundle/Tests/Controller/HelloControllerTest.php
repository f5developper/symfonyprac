<?php

namespace Sample\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Index');
    }

    public function testConfirm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Confirm');
    }

    public function testResult()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Result');
    }

}
