<?php
require_once 'init.php';

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);


$calculator = new PPH21Calculator($first, $second, $third, $fourth);
echo $calculator->calculate(2500000);