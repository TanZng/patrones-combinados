<?php
class FabricaDeMascotas extends FabricaDeCriaturas
{
  function crearGrande($nombre)
  {
    return new MascotaGrande($nombre, 100, 1000, 1);
  }

  function crearPequena($nombre)
  {
    return new MascotaPequena($nombre, 10, 100, 1);
  }
}
?>
