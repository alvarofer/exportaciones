<?php
$oProducto=new Producto();
?>
<form method="post" action="accform/accProductoIngresar.php">
  nombre:<br>
  <input type="text" name="nombre" id="nombre"><br>
  total USD:<br>
  <input type="text" name="total" id="total">
  año:<br>
  <input type="text" name="ano" id="ano">
</form>
<?php

?>
<input type="submit" value="ingresar">
</form>