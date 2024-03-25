# API Externa de Calculadora

Esta API externa de calculadora proporciona endpoints para realizar operaciones matemáticas simples como suma, resta, multiplicación y división.

---

## Descripción

La API está desarrollada en PHP y sigue un enfoque basado en archivos para manejar las distintas operaciones. Cada operación tiene su propio archivo de endpoint dentro de la carpeta `endpoints/`. Estos archivos manejan las solicitudes POST y devuelven los resultados en formato JSON.

---

## Uso

Para utilizar la API, puedes enviar solicitudes POST a la URL de la API. La API espera los siguientes parámetros en la solicitud:

- `num1`: Primer número para la operación.
- `num2`: Segundo número para la operación.
- `operation`: Operación a realizar (add, subtract, multiply, divide).

---

## Endpoints disponibles

- `add.php`: Este endpoint realiza la operación de suma entre dos números.
- `subtract.php`: Este endpoint realiza la operación de resta entre dos números.
- `multiply.php`: Este endpoint realiza la operación de multiplicación entre dos números.
- `divide.php`: Este endpoint realiza la operación de división entre dos números.

Cada archivo de endpoint contiene el código necesario para realizar la operación correspondiente y manejar los parámetros de entrada.
