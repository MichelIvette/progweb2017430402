<?php
function calculo ($x) {
    return (( (1/2) * $x + ((3 + $x) / 2) * (2 * pow($x, 2)) ) / ((2 + 3) * $x));

}


   #Código que se ejecuta inmediatamente 
   $x = $_GET ["x"];
   $r = calculo ($x);
?>
<html>
<head>
<h2> Expresión algebraica B </h2>
</head>
<body> 
    <br>
    <img src="b.png" width="300">
    <h4> Resultado calculado con PHP: </h4> 
    <p> <?php echo $x?> = <?php echo $r ?> </p>
</body>
</html>
