<?php
function calculo ($x) {
    return sqrt((pow($x, 2) / 2 + 1 / sqrt($x)) / (3 + (1/2) * pow($x, 3)));


}


   #Código que se ejecuta inmediatamente 
   $x = $_GET ["x"];
   $r = calculo ($x);
?>
<html>
<head>
<h2> Expresión algebraica E </h2>
</head>
<body> 
    <br>
    <img src="e.png" width="300">
    <h4> Resultado calculado con PHP: </h4> 
    <p> <?php echo $x?> = <?php echo number_format ($r,4) ?> </p>
</body>
</html>
