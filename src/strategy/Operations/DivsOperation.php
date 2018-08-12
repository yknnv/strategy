<?php
/**
 * Class DivsOperation
 * @package Yknnv\Strategy
 * Date: 12.08.2018
 * Time: 14:53
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

namespace Yknnv\Strategy\Operations;


use Yknnv\Strategy\Exceptions\CalculateException;

class DivsOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws \Exception
     */
    public function calc(int $a, int $b): int
    {
        if(!$b)
            throw new CalculateException('Division by ZERO');

        return floor($a / $b);
    }
}