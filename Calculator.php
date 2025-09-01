<?php
class Calculator{
    public function calculate($number1, $number2, $operation){
        switch ($operation){
            case 'add':
                return $number1 + $number2;
            case 'subtract' :
                return $number1 - $number2;
            case 'multiply':
                return $number1 * $number2;
            case 'divide':
                if($number2 == 0){
                    return "Can't divide by zero!";
                }  
                return $number1 / $number2;
            default:
                return "Invalid Operation!";              
        }
    }
}