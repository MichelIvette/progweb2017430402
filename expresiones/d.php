<?php
function calculo ($x) {
    return (((1/2 + 1/4 + 1/8) * pow($x, 1/3)) / ((pow($x, 1/2) / 2) + (3 * pow($x, 2) / 4)));

}


   #Código que se ejecuta inmediatamente 
   $x = $_GET ["x"];
   $r = calculo ($x);
?>
<html>
<head>
<h2> Expresión algebraica D </h2>
</head>
<body> 
    <br>
    <img src="d.png" width="300">
    <h4> Resultado calculado con PHP: </h4> 
    <p> <?php echo $x?> = <?php echo number_format ($r,3) ?> </p>
</body>
</html>
