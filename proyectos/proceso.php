<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nombre: " . htmlspecialchars($_POST["nombre"]) . "<br>";
    echo "Apellido: " . htmlspecialchars($_POST["apellido"]);
}

?>
<br>
<a href="index.php">El formulario</a>