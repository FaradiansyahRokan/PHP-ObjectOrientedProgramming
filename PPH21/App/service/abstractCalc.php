<?php

abstract class AbstractCalculator implements calcInterface
{
private $chain;
public function __construct(?calcInterface $chain = null)
{
$this->chain = $chain;
}
public function calculate(float $pkp): float
{
    $previousValue = 0;
if ($previous = $this->chain) {
$previousValue = $this->chain->calculate($previous->maxPkp());
$pkp -= $previous->maxPkp();
}

return ($this->taxPercentage() * $pkp) + $previousValue;
}
}

