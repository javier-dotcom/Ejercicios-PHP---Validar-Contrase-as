<style>
    body{
        width: 80%;
        background-color:black;
        color:white;
        text-align:center;
        margin:auto;
    }
</style>

<?php
echo "<h2> Resultado </h2>";
$a = $_POST["cadena1"];
$b = $_POST["cadena2"];

$numeros = "1234567890";

if ($a == $b) {
    if (strtolower($a) != $a) {
        if (strpbrk($a, $numeros)) {
            echo "Son iguales";
        } else {
            echo "Contraseñas invalidas deben tener al menos un numero";
        }
    } else {

        echo "Contraseñas invalidas deben tener al menos una mayuscvula";
    }
} else {
    echo "Contraseñas invalidas,  son distintas";
}
?>
