<?php

namespace SanderVanHooft\Tests\BladeNl2Br;

use Orchestra\Testbench\TestCase;
use SanderVanHooft\Tests\BladeNl2Br\Concerns\RendersBlade;

abstract class BaseTestCase extends TestCase
{
    use RendersBlade;

    protected function getPackageProviders($app)
    {
        return ['SanderVanHooft\BladeNl2Br\ServiceProvider'];
    }

    // protected function getEnvironmentSetUp($app)
    // {
    //     $app->setBasePath(__DIR__.'/../laravel');
    //     View::addLocation(resource_path('views'));
    // }

    /**
     * Assert that blade markup and view data render HTML markup.
     *
     * @param string $expectedHtml
     * @param string $viewContent blade markup
     * @param array $viewData
     * @return void
     */
    protected function assertBladeRenders($expectedHtml, $viewContent, $viewData = [])
    {
        $this->assertEquals($expectedHtml, $this->renderBlade($viewContent, $viewData));
    }
}
