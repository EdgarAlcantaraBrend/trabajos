<?php

    $conexion= mysqli_connect('localhost','root','','insertar');

    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];

    $sqlTabla1= "INSERT into tabla1(valorA1, valorA2)
                        values ('$v1', '$v2')";

    $ejecutado = mysqli_query($conexion,$sqlTabla1);

    if ($ejecutado ==1) {

        $sqlTabla1= "INSERT into tabla2(valorB1, valorB2)
                        values ('$v1', '$v2')";

        $ejecutado2 = mysqli_query($conexion,$sqlTabla1);
        echo "exito doble";
    }else{
        echo "No se inserto nada";
    }
?>