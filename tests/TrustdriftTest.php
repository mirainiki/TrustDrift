<?php
/**
 * Tests for TrustDrift
 */

use PHPUnit\Framework\TestCase;
use Trustdrift\Trustdrift;

class TrustdriftTest extends TestCase {
    private Trustdrift $instance;

    protected function setUp(): void {
        $this->instance = new Trustdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
