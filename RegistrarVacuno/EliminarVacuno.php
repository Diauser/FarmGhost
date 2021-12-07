<?php
  include '../Include/Conexion.php';


  $CodigoVacuno=$_GET['CodigoVacuno'];
  $sql = "DELETE FROM vacuno WHERE cod_alf= $CodigoVacuno";

  if ($dbh->query($sql) == true) {
    echo '<script type="text/javascript"> alert("REGISTRO ELIMINADO!")</script>';
    echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
  }else {
    echo '<script type="text/javascript"> alert("REGISTRO NO FUE ELIMINADO!")</script>';
    echo "<script> window.location.href = 'RegistrarVacuno.php';</script>";
  }
?>