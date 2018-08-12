<?php
/**
 * Class CalculatorTest
 * Date: 12.08.2018
 * Time: 15:36
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

use PHPUnit\Framework\TestCase;
use Yknnv\Strategy\Calculator;
use Yknnv\strategy\Exceptions\CalculateException;
final class CalculatorTest extends TestCase
{
    /**
     * @throws CalculateException
     */
    public function testPlusTwoNumbers(): void
    {
        $sum = new Calculator('+');
        $a = 324;
        $b = 222;

        $this->assertEquals(
            $a + $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws CalculateException
     */
    public function testSubsTwoNumbers(): void
    {
        $sum = new Calculator('-');
        $a = 324;
        $b = 222;

        $this->assertEquals(
            $a - $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws CalculateException
     */
    public function testMultTwoNumbers(): void
    {
        $sum = new Calculator('*');
        $a = 324;
        $b = 222;

        $this->assertEquals(
            $a * $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws CalculateException
     */
    public function testDivsByZero(): void
    {
        $sum = new Calculator('/');
        $this->expectException(CalculateException::class);
        $a = 324;
        $b = 0;
        $sum->calc($a, $b);
    }

    /**
     * @throws Exception
     */
    public function testDivsTwoNumbers(): void
    {
        $sum = new Calculator('/');
        $a = 324;
        $b = 222;

        $this->assertEquals(
            floor($a / $b),
            $sum->calc($a, $b)
        );
    }
}