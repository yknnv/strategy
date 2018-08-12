<?php
/**
 * Class MultOperation
 * @package Yknnv\Strategy
 * Date: 12.08.2018
 * Time: 14:53
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

namespace Yknnv\Strategy;


class MultOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        return $a * $b;
    }
}