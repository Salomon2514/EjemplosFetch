<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>problema #1</title>
</head>
<body>
  <h1>Problema #1</h1>
  <h2>Desde la clase persona</h2>
  <?php
    include './class/class1.php';

    $persona = new Persona("Juan", "Pérez", 1, new DateTime("2000-01-01"));
    echo $persona->verDatos();
  ?>
  <hr/>
  <h2>Desde la clase estudiante</h2>
  <?php


    $estudiante = new Estudiante("Juan", "Pérez", 1, new DateTime("2000-01-01"), "E123");
    echo $estudiante->verDatos();
  ?>
  <hr/>
  <h2>Desde la clase Profesor</h2>
  <?php

    $profesor = new Profesor("Ana", "García", 2, 50000, new DateTime("1985-05-15"));
    echo $profesor->verDatos();
  ?>
</body>
</html>