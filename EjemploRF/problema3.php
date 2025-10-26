<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post">
        <input type="radio" name="tipo" value="farenheit" required>Farenheit<br><br>
        <input type="radio" name="tipo" value="celsius" required>Celsius<br><br>
        Grados: <input type="float" name="grados" ><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    include_once "./class/class3.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tipo = $_POST["tipo"];
        $grados = $_POST["grados"];

        $conversor = new Conversion($tipo, $grados);

        echo "<br>Resultados<br>";
        echo "La conversión es: ". $conversor->calcularConversion()."<br>";
        echo"estado es: " . $conversor->Estado();

    }


    ?>
</body>
</html>