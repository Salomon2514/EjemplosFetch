<?php
class calculo {
  public function Diagonal(int $altura, int $anchura) {
    return sqrt(pow($altura, 2) + pow($anchura, 2));
  }
  public function Area(int $altura, int $anchura) {
    return $altura * $anchura;
  } 
  public function Perimetro(int $altura, int $anchura) {
    return 2 * ($altura + $anchura);
  }
}
?>