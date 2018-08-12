<?php
/**
 * Class OperationInterface
 * @package Yknnv\Strategy
 * Date: 12.08.2018
 * Time: 14:44
 * @author Yury Kononov <kononov@aeroidea.ru>
 */

namespace Yknnv\Strategy\Operations;


interface OperationInterface
{
    public function calc(int $a, int $b): int;
}