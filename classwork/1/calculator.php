<?php

require_once 'iCalculator.php';

class Calculator implements iCalculator
{
   public function plus($a,$b)
   {
        return $a + $b;
   }
   public function minus($a,$b)
   {
        return $a - $b;
   }
   public function divide($a,$b)
   {
        return $a / $b;
   }
   public function multiply($a,$b)
   {
         return $a * $b;
   }
}
<<<<<<< HEAD
$calculator = new Calculator();
echo $calculator->plus(1, 2); // 3
echo $calculator->minus(4, 2); // 2
echo $calculator->divide(4, 2); // 2
echo $calculator->multiply(1, 2); // 2
=======

$calculator = new Calculator();
$calculator->plus(1, 2); // 3
>>>>>>> upstream/dev
