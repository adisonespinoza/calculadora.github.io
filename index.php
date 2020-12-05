<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Calculadora</title>
</head>
<body class="contenedor">
    <h1>Calculadora PHP</h1>

    <form action="index.php" method="post">
    <input type="number" name="n1" value="">
    <select name="opciones" id="">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select>
    <input type="number" name="n2" value="">
    <button type="submit">Calcular</button>

        <?php
if (isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["opciones"])) {
    $numero1=$_POST["n1"];
    $numero2=$_POST["n2"];
    $opciones=$_POST["opciones"];
    $resultado=0;

    if ($opciones=="+") {
        $resultado=  $numero1 + $numero2;
    } elseif ($opciones=="-") {
        $resultado=  $numero1 - $numero2;
    } elseif ($opciones=="*") {
        $resultado=  $numero1 * $numero2;
    } elseif ($opciones=="/") {
        $resultado=  $numero1 / $numero2;
    }
    echo "<h2>Resultado: $resultado</h2>" ;
}
?>
    </form>
</body>




</html>