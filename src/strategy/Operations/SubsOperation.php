<?php
/**
 * Class SubsOperation
 * @package Yknnv\Strategy
 * Date: 12.08.2018
 * Time: 14:52
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

namespace Yknnv\Strategy\Operations;


class SubsOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return $a - $b;
    }
}