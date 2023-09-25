<?php
require_once 'models/CalculatorModel.php';

class CalculatorController {
    public function index() {
        $model = new CalculatorModel();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $operand1 = $_POST['operand1'];
            $operator = $_POST['operator'];
            $operand2 = $_POST['operand2'];
            $result = $model->calculate($operand1, $operator, $operand2);
        }

        require 'views/calculator_view.php';
    }
}
?>