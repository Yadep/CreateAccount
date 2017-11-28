<?php


use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class PasswordTest extends TestCase
{
    public function testCanBeCreatedFromValidPassword()
    {
        $this->assertInstanceOf(
            PasswordController::class,
            PasswordController::fromString('Password') // au moins 5 caracteres et une majuscule
        );
    }

    public function testCannotBeCreatedFromInvalidPassword()
    {
        $this->expectException(InvalidArgumentException::class);

        PasswordController::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'Password',
            PasswordController::fromString('Password')
        );
    }
}
