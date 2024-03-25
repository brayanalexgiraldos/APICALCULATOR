<?php
// divide.php

// Verifica si se han recibido los parámetros necesarios
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    // Obtiene los parámetros
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Verifica si el divisor es cero
    if ($num2 == 0) {
        // Devuelve un mensaje de error si el divisor es cero
        echo json_encode(['error' => 'Division by zero']);
    } else {
        // Realiza la operación de división
        $result = $num1 / $num2;

        // Devuelve el resultado como JSON
        echo json_encode(['result' => $result]);
    }
} else {
    // Si faltan parámetros, devuelve un mensaje de error
    echo json_encode(['error' => 'Missing parameters']);
}
?>