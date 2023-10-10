<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class APITest extends TestCase
{
    /**
     * @dataProvider providerAPIData
     */ 
    public function test_the_api_returns_expected_response(string $endpoint, int $response_code): void
    {
        $response = $this->get('/api' . $endpoint);

        $response->assertStatus($response_code);
    }

    public static function providerAPIData() {
        return array(
            array('/dance_classes', 200),
            array('/locations', 200),
            array('/teachers', 200),
            array('/styles', 200),
            array('/random', 404),
            array('/', 404),
        );
    }
}
