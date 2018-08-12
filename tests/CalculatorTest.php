<?php
/**
 * Class CalculatorTest
 * Date: 12.08.2018
 * Time: 15:36
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

use PHPUnit\Framework\TestCase;
use Yknnv\Strategy\Calculator;

final class CalculatorTest extends TestCase
{
    /**
     * @throws Exception
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
     * @throws Exception
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
     * @throws Exception
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
     * @throws Exception
     */
    public function testDivsByZero(): void
    {
        $sum = new Calculator('/');
        $this->expectException(\Exception::class);
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