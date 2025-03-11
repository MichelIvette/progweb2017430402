<?php
function calculo ($x, $y) {
    return (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
}


   #Código que se ejecuta inmediatamente 
   $x = $_GET ["x"];
   $y = $_GET ["y"];
   $r = calculo ($x, $y);
?>
<html>
<head>
<h2> Expresión algebraica A </h2>
</head>
<body> 
    <br>
    <img src="a.png" width="300">
    <h4> Resultado calculado con PHP: </h4> 
    <p> <?php echo $x?> + <?php echo $y ?> = <?php echo $r ?> </p>
</body>
</html>


