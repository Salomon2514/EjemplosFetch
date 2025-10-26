<?php
  class Persona { 
    private string $Nombre;
    private string $Apellido;
    private int $id;
    private DateTime $fechaNacimiento;
    
    public function __construct(string $Nombre, string $Apellido, int $id, DateTime $fechaNacimiento) {
      $this->Nombre = $Nombre;
      $this->Apellido = $Apellido;
      $this->id = $id;
      $this->fechaNacimiento = $fechaNacimiento;
    }
    public function verDatos():string {
      return "Nombre: " . $this->Nombre . "<br>" .
             "Apellido: " . $this->Apellido . "<br>" .
             "ID: " . $this->id . "<br>" .
             "Fecha de Nacimiento: " . $this->fechaNacimiento->format('Y-m-d') . "<br>";
    }
  }

  class Estudiante extends Persona {
    private string $idColaborador;

    public function __construct(string $Nombre, string $Apellido, int $id, DateTime $fechaNacimiento, string $idColaborador) {
      parent::__construct($Nombre, $Apellido, $id, $fechaNacimiento);
      $this->idColaborador = $idColaborador;
    }
    
    public function verDatos():string {
      return parent::verDatos() .
             "ID Colaborador: " . $this->idColaborador . "<br>";
    }
  }

  class Profesor extends Persona{
    private int $salario;

    public function __construct(string $Nombre, string $Apellido, int $id, int $salario, DateTime $fechaNacimiento) {
      parent::__construct($Nombre, $Apellido, $id, $fechaNacimiento);
      $this->salario = $salario;
    }
    public function verDatos():string {
      return parent::verDatos() .
             "Salario: " . $this->salario . "<br>";

    }
  }
?>