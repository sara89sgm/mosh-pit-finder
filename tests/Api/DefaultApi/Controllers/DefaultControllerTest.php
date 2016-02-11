<?php

namespace Tests\Api\DefaultApi\Controllers;

use Tests\Api\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testInfo()
    {
        $client = $this->getClient('/');
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertEquals(
            '{"name":"caleche","version":1,"source":"0.0.1","env":"phpunit","debug":true}',
            $client->getResponse()->getContent()
        );
    }

}