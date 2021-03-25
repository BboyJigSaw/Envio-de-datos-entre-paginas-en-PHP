<?php
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $direccion= $_POST['direccion'];
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sexo= $_POST['sexo'];


    echo("Los Datos Recibidos son: <br>");
    echo("Nombre: $nombre <br> ");
    echo("Apellido: $apellido <br>");
    echo("Sexo: $sexo <br>");
    echo("Direccion: $direccion <br>");
    echo("Telefono de contacto: $telefono <br>");
    echo("Correo Electronico: $email <br>");
    echo("Contraseña: $password <br>");

?>