<?php 
$message = "";
$yearsAge = 0;

if(isset($_POST["birth_date"])){

$birthDate = new DateTime ($_POST["birth_date"]);
$today = new DateTime ();
$newDate = $birthDate->diff($today);
echo "Edad en Días: " . $newDate->days ;
$yearsAge = $newDate->days / 365.25; //El 365.25 completa un dia del año bisiesto cada 4 años. 
echo "<br>";
echo "Edad en Años: " . round($yearsAge, 2);

if ($newDate->days >= 6574) {  //6574 teniendo en cuenta años bisiestos, en 18 años serian minimo 4.
    $message = " Por tanto: Es mayor de edad";
    }
    else {
        $message = " Por tanto: No es mayor de edad";
    }
}
?>