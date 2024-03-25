<?php
// Verifica si se ha recibido una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
        $operation = $_POST['operation'];
        $endpoint = 'endpoints/' . $operation . '.php';
        // Verifica si el archivo de endpoint existe
        if (file_exists($endpoint)) {
            // Incluye el archivo de endpoint y deja que maneje la solicitud
            include $endpoint;
        } else {
            // Si el archivo de endpoint no existe, devuelve un mensaje de error
            echo json_encode(['error' => 'Invalid operation']);
        }
    } else {
        // Si faltan parámetros, devuelve un mensaje de error
        echo json_encode(['error' => 'Missing parameters']);
    }
} else {
    // Si no es una solicitud POST, devuelve un mensaje de error
    echo json_encode(['error' => 'Invalid request method']);
}
?>