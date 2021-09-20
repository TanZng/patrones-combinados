<?php
class Experiencia
{
  private $total;
  private $nueva;

  function __construct()
  {
    $this->total = 0;
    $this->nueva = 0;
  }

  function getTotal()
  {
    return $this->total;
  }

  function setTotal($total)
  {
    $this->total = $total;
  }

  function getNueva()
  {
    return $this->nueva;
  }

  function setNueva($nueva)
  {
    $this->nueva = $nueva;
  }

  function incTotal($incremento)
  {
    $this->total += $incremento;
  }

  function decNueva($decremento)
  {
    $this->nueva -= $decremento;
  }

  function incNueva($incremento)
  {
    $this->nueva -= $incremento;
  }
}
?>
