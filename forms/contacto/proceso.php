<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //asignar a variables locales los datos ingresados en el form
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        //despliegue datos recibidos
        echo "<h2>Datos recibidos</h2>";
        echo "<br><br>";
        echo "<p>Nombre: $nombre</p><br>";
        echo "<p>Apellido: $apellido</p><br>";
        echo "<p>Correo: $correo</p><br>";
        echo "<p>Mensaje: $mensaje</p><br>";
    }

    
?>  