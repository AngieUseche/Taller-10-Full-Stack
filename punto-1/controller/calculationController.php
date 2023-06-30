<?php 
$firstNumber = 0;
$secondNumber = 0;
$option = "";
$result = 0;
$message ="";

if(isset($_POST["first_number"]) && isset($_POST["second_number"]) && isset($_POST["operation_type"])){

    $firstNumber = intval($_POST["first_number"]);
    $secondNumber =intval($_POST["second_number"]);
    $option = $_POST["operation_type"];

    switch($option) {
        case "A":
            $result = $firstNumber + $secondNumber;
            break;
        case "B":
            $result = $firstNumber - $secondNumber;
            break;
        case "C":
            $result = $firstNumber * $secondNumber;
            break;
        case "D":
            $result = $firstNumber / $secondNumber;
            break;
        default:
            $message = "Usted no seleccionó una opción valida";
    }
}
?>