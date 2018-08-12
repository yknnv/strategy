<?php

namespace Yknnv\Strategy;

use Yknnv\Strategy\Exceptions\CalculateException;
use Yknnv\Strategy\Operations\DivsOperation;
use Yknnv\Strategy\Operations\MultOperation;
use Yknnv\Strategy\Operations\OperationInterface;
use Yknnv\Strategy\Operations\PlusOperation;
use Yknnv\Strategy\Operations\SubsOperation;

class Calculator
{

    private $strategy;

    /**
     * Calculator constructor.
     * @param string $operation
     * @throws CalculateException
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * @param $operation
     * @return OperationInterface
     * @throws CalculateException
     */
    private function getStrategy($operation):OperationInterface
    {
        switch ($operation)
        {
            case '+': return new PlusOperation();
            case '-': return new SubsOperation();
            case '*': return new MultOperation();
            case '/': return new DivsOperation();
            default : throw new CalculateException('Unknown operation');
        }
    }

    public function calc(int $a, int $b): int
    {
        return $this->strategy->calc($a, $b);
    }
}