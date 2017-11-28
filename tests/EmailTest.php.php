<?php


use PHPUnit\Framework\TestCase;
require_once '../class/EmailController.php';
/**
 * @covers Email
 */
final class EmailTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

 /*   public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }*/

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
    
    public function testAdd()
    {
        $this->assertEquals(
          2,
          $this->object->add(1, 1)
        );
    }
}