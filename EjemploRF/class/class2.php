<?php
include_once 'funcionMatematicos.php';
  class Rectangulo {

    private int $altura;
    private int $anchura;

    public function __construct(int $altura, int $anchura)
    {
      $this->altura = $altura;
      $this->anchura = $anchura;
    }
    public function Diagonal() {
      $calculo = new calculo();
      return $calculo->Diagonal($this->altura, $this->anchura);
    }
    public function Area() {
      $calculo = new calculo();
      return $calculo->Area($this->altura, $this->anchura);
    } 
    public function Perimetro() {
      $calculo = new calculo();
      return $calculo->Perimetro($this->altura, $this->anchura);
    }
    // validar datos staticos
    public static function validarDatos($altura, $anchura): bool {
      return is_numeric($altura) && $altura > 0 && is_numeric($anchura) && $anchura > 0;
    }
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $altura = $_POST['altura'];
    $anchura = $_POST['anchura'];
    try{
      if(Rectangulo::validarDatos($altura, $anchura)) {
        $rectangulo = new Rectangulo($altura, $anchura);
        $resultado = [
          'diagonal' => $rectangulo->Diagonal(),
          'area' => $rectangulo->Area(),
          'perimetro' => $rectangulo->Perimetro()
        ];
        echo json_encode($resultado);

      }else {
        throw new Exception("Los datos no son validos");
      }
    }catch(Exception $e) {
      throw new Exception("Error: " . $e->getMessage());
    }
  }

?>