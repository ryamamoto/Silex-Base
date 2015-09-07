<?php

use Silex\WebTestCase;

class ApplicationTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../src/app.php';
        require __DIR__.'/../config/prod.php';
        require __DIR__.'/../src/controllers.php';

        return $app;
    }

    public function test404()
    {
        $client = $this->createClient();
        $client->request('GET', '/give-me-a-404');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function test200()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
    }

    public function testWordInThePage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');
        $this->assertContains('Welcome to your new Silex Application', $crawler->filter('body')->text());
    }
}
