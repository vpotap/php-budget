<?php
namespace Tests\Functional;
class HomeControllerTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetHomepage()
    {
        $response = $this->runApp('GET', '/');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('Welcome', (string)$response->getBody());
        // $this->assertNotContains('Hello', (string)$response->getBody());
    }
    // /**
    //  * Test that the index route with optional name argument returns a rendered greeting
    //  */
    // public function testGetHomepageWithGreeting()
    // {
    //     $response = $this->runApp('GET', '/name');
    //     $this->assertEquals(200, $response->getStatusCode());
    //     $this->assertContains('Hello name!', (string)$response->getBody());
    // }
    // /**
    //  * Test that the index route won't accept a post request
    //  */
    // public function testPostHomepageNotAllowed()
    // {
    //     $response = $this->runApp('POST', '/', ['test']);
    //     $this->assertEquals(405, $response->getStatusCode());
    //     $this->assertContains('Method not allowed', (string)$response->getBody());
    // }
}
