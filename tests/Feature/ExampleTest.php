<?php

namespace Tests\Feature;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalePageController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_home_route()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_food_beverage_route()
    {
        $response = $this->get('/category/food-beverage');
        $response->assertStatus(200);
    }

    public function test_beauty_health_route()
    {
        $response = $this->get('/category/beauty-health');
        $response->assertStatus(200);
    }

    public function test_home_care_route()
    {
        $response = $this->get('/category/home-care');
        $response->assertStatus(200);
    }

    public function test_baby_kid_route()
    {
        $response = $this->get('/category/baby-kid');
        $response->assertStatus(200);
    }

    public function test_user_route()
    {
        $response = $this->get('/user/1/name/john');
        $response->assertStatus(200);
    }

    public function test_sales_route()
    {
        $response = $this->get('/sales');
        $response->assertStatus(200);
    }

    public function test_index_method()
    {
        $homeController = new HomeController();
        $response = $homeController->index();

        $this->assertEquals('Welcome to the Home Page!', $response);
    }

    public function test_food_beverage_method()
    {
        $productController = new ProductController();
        $response = $productController->foodBeverage();

        $this->assertEquals('Food and Beverage Products', $response);
    }

    public function test_user_route_method()
    {
        $userController = new UserController();
        $response = $userController->user(1, 'john');

        $this->assertEquals('User ID: 1, Name: john', $response);
    }

    public function test_sales_method()
    {
        $salePageController = new SalePageController();
        $response = $salePageController->sales();

        $this->assertEquals('Sales Page', $response);
    }
}
