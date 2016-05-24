<?php
include("../librerias.php");
session_start();
$oPro=new Producto();
$oAux=new Producto();
$oAux->Nombre()=$_POST["nombre"];
$oAux->TotalUSD()=$_POST["total"];
$oAux->Ano()=$_POST["ano"];

$oPro->agrega($oAux->Nombre(),$oAux->TotalUSD(),$oAux->Ano());
?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>
