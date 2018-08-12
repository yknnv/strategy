<?php
/**
 * Class PlusOperation
 * @package Yknnv\Strategy
 * Date: 12.08.2018
 * Time: 14:48
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

namespace Yknnv\Strategy\Operations;


class PlusOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}