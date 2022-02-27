<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_shop()
    {
        $response = $this->get('/shop');
        $response->assertStatus(200);
    }

    public function test_category()
    {
        $response = $this->get('/category/1');
        $response->assertStatus(200);
    }
    public function test_cart()
    {
        $response = $this->get('/cart');
        $response->assertStatus(200);
    }
    public function test_checkout()
    {
        $response = $this->get('/checkout');
        $response->assertStatus(200);
    }
    public function test_success()
    {
        $response = $this->get('/success');
        $response->assertStatus(200);
    }
}
