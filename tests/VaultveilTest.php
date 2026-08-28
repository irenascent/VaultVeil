<?php
/**
 * Tests for VaultVeil
 */

use PHPUnit\Framework\TestCase;
use Vaultveil\Vaultveil;

class VaultveilTest extends TestCase {
    private Vaultveil $instance;

    protected function setUp(): void {
        $this->instance = new Vaultveil(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultveil::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
