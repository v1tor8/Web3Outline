<?php
/**
 * Tests for Web3Outline
 */

use PHPUnit\Framework\TestCase;
use Web3outline\Web3outline;

class Web3outlineTest extends TestCase {
    private Web3outline $instance;

    protected function setUp(): void {
        $this->instance = new Web3outline(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3outline::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
