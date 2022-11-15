<?php

require_once "Calculator.php";

if(isset($_POST['submit'])){

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (is_numeric($number1) && is_numeric($number2)) {
        $calculator = new Calculator;

        switch ($operation){
            case 'plus':
                $total = $calculator->add($number1, $number2);
                break;
            case 'minus':
                $total = $calculator->subtract($number1, $number2);
                break;
            case 'times':
                $total = $calculator->multiply($number1, $number2);
                break;
            case 'divided by':
                $total = $calculator->divide($number1, $number2);
                break;
        }

        echo $total;

    } else{
        echo 'error';
    }
}