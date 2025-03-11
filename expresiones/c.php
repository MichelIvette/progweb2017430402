<?php
function calculo ($x) {
    return (sqrt(pow(2 * $x, 2) + pow(3, 2)) / 5) + pow($x, 2/2);

}


   #Código que se ejecuta inmediatamente 
   $x = $_GET ["x"];
   $r = calculo ($x);
?>
<html>
<head>
<h2> Expresión algebraica C </h2>
</head>
<body> 
    <br>
    <img src="c.png" width="300">
    <h4> Resultado calculado con PHP: </h4> 
    <p> <?php echo $x?> = <?php echo $r ?> </p>
</body>
</html>
