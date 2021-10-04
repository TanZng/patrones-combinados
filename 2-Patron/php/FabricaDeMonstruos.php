<?php
class FabricaDeMonstruos
{
  function crearGrande($nombre, $nresistencia, $nhabilidad, $nultimate)
  {
    gResistencia = new GestorDeResistencia($nresistencia);
    gHabilidad = new GestorDeHabilidades($nhabilidad);
    gUltimate = new GestorDeUltimate($nultimate);

    $resistencia = gResistencia->generarResistencia();
    $habilidad = gHabilidad->generarHabilidad();
    $ultimate = gUltimate->generarUltimate();
    $multiplicador = 0.3;
    return  new MonstruoColosal($nombre, 100, 1000, 1, $habilidad, $ultimate, $resistencia, $multiplicador);
  }

  function crearPequena($nombre, $nresistencia, $nhabilidad, $nultimate)
  {
    gResistencia = new GestorDeResistencia($nresistencia);
    gHabilidad = new GestorDeHabilidades($nhabilidad);
    gUltimate = new GestorDeUltimate($nultimate);

    $resistencia = gResistencia->generarResistencia();
    $habilidad = gHabilidad->generarHabilidad();
    $ultimate = gUltimate->generarUltimate();
    $multiplicador = 0.3;
    return  new MonstruoComun($nombre, 100, 1000, 1, $habilidad, $ultimate, $resistencia, $multiplicador);
  }
}
?>
