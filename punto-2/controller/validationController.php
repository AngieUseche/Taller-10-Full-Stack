<?php 
$age = 0;
$message = "";

if(isset($_POST["age_person"])){

    $age = intval($_POST["age_person"]);

    if ($age >= 18) {
       $message = " Usted es mayor de edad";
    }
    else {
        $message = " Usted no es mayor de edad";
    }
}
?>