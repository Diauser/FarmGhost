<?php

    include '../Include/Conexion.php';
    // Prepare
    $stmt = $dbh->prepare("INSERT INTO vacuno(cod_alf, nombre, fecha_in, genero, raza, color, id_finca) VALUES (?, ?, ?, ?, ? , ?, ?)");
    // Bind
    $CodigoVacuno = $_POST['CodigoVacuno'];
    $NombreVacuno = $_POST['NombreVacuno'];
    $FechaIngreso = $_POST['FechaIngreso'];
    $Genero = $_POST['Genero'];
    $Raza = $_POST['Raza'];
    $Color = $_POST['Color']; 
    $CodigoFinca = $_POST['CodigoFinca'];

    $stmt->bindParam(1, $CodigoVacuno);
    $stmt->bindParam(2, $NombreVacuno);
    $stmt->bindParam(3, $FechaIngreso);
    $stmt->bindParam(4, $Genero);
    $stmt->bindParam(5, $Raza);
    $stmt->bindParam(6, $Color);
    $stmt->bindParam(7, $CodigoFinca);
    // Excecute
    $stmt->execute();
    
    if($stmt == TRUE){
        echo '<script type="text/javascript"> alert("REGISTRO GUARDADO!")</script>';
       echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
    }else{
        echo '<script type="text/javascript"> alert("REGISTRO NO FUE GUARDADO!")</script>';
        echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
    }

?>