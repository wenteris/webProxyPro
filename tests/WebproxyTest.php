<?php
/**
 * Tests for webProxy
 */

use PHPUnit\Framework\TestCase;
use Webproxy\Webproxy;

class WebproxyTest extends TestCase {
    private Webproxy $instance;

    protected function setUp(): void {
        $this->instance = new Webproxy(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Webproxy::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
