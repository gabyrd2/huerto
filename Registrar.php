<?php 

    include("conexion.php");

    if(isset($_POST['register'])){
        if(
            strlen($_POST['name']) >=1 &&
            strlen($_POST['Hortaliza']) >=1 &&
            strlen($_POST['Cantidad']) >=1 &&
            strlen($_POST['Estacion'])  >=1 &&
            strlen($_POST['Tipo']) >=1 
            ) {
                $name = trim($_POST['name']);
                $Hortaliza = trim($_POST['Hortaliza']);
                $Cantidad = trim($_POST['Cantidad']);
                $Estacion = trim($_POST['Estacion']);
                $Tipo = trim($_POST['Tipo']);
                $fecha = date("d/m/y");
                $consulta = "INSERT INTO datos(Nombre,Hortaliza,Cantidad,Estacion,Tipo,fecha)
                    VALUES('$name','$Hortaliza','$Cantidad', '$Estacion', '$Tipo', '$fecha')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                ?>
                    <h3 class="sucess"> Tu registro se a completado </h3>
                <?php
                } else {
                ?>
                    <h3 class = "error">Ocurrio un error</h3>
                <?php
                }

            }else{
                ?>
                    <h3 class = "error">Llena todos los campos</h3>
                <?php
            }

    }

?>