<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre']; 
    $apellido = $_POST['apellido']; 
    $telefono = $_POST['telefono']; 
    $edad = $_POST['edad']; 
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario']; 

    echo "<h1>Datos del formulario</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Edad: $edad</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Comentario: $comentario</p>";
} else {
    echo "<p>No se ha enviado ningún dato.</p>";
}