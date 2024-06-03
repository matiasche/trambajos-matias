<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Número del cual queremos la tabla de multiplicar
$numero = 5;

// Función para imprimir la tabla de multiplicar
function imprimirTablaMultiplicar($num) {
    echo "Tabla de multiplicar del número $num:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado\n";
    }
}

// Llamada a la función
imprimirTablaMultiplicar($numero);
?>

</body>
</html>