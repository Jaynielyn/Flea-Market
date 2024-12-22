<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_page_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200); // ホームページが正しく表示されるかを確認
    }
}
