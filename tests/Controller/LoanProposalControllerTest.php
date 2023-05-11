<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoanProposalControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/loan/proposal');

        $this->assertResponseIsSuccessful();
    }

    public function testStore(): void
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/loan/proposal/store',
            array(),
            array(),
            array('CONTENT_TYPE' => 'multipart/form-data'),
            '[{"amount":1200,"term":12}]'
        );

        $this->assertResponseIsSuccessful();
    }
}
