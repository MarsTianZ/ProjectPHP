<?php
class CalculatorModel {
    public function calculate($operand1, $operator, $operand2) {
        switch ($operator) {
            case '+':
                return $operand1 + $operand2;
            case '-':
                return $operand1 - $operand2;
            case '*':
                return $operand1 * $operand2;
            case '/':
                return $operand1 / $operand2;
            default:
                return null;
        }
    }
}
?>