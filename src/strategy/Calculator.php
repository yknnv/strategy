<?php

namespace Yknnv\Strategy;

class Calculator
{

    private $strategy;

    /**
     * Calculator constructor.
     * @param string $operation
     * @throws \Exception
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * @param $operation
     * @return OperationInterface
     * @throws \Exception
     */
    private function getStrategy($operation):OperationInterface
    {
        switch ($operation)
        {
            case '+': return new PlusOperation();
            case '-': return new SubsOperation();
            case '*': return new MultOperation();
            case '/': return new DivsOperation();
            default : throw new \Exception('Unknown operation');
        }
    }

    public function calc(int $a, int $b): int
    {
        return $this->strategy->calc($a, $b);
    }
}