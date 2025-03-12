<?php
ini_set ("display_errors", E_ALL);
include_once "persona.php";

$lista = [
    new Persona ("Fulano", "1969-11-02", "5546546554"),
    new Persona ("Pedro", "1982-11-02", "5546020554"),
    new Persona ("Sara", "2001-12-12", "5513546554"),
    new Persona ("Andrea", "1999-01-02", "5546446654"),
    new Persona ("Happy", "2005-03-22", "5544546514"),
    new Persona ("Cesar", "2003-08-10", "5546556354"),
    new Persona ("Chris", "1998-10-02", "5561546554"),
    new Persona ("Firulais", "1960-09-02", "5546522254"),
    new Persona ("Carlos", "1995-08-26", "5546336554"),
    new Persona ("Sergio", "1996-09-15", "5541146554"),
];
?>

<!DOCTYPE html> <!-- Indica estándar de HTML5 -->
<html>

    <head> 
        <meta charset="utf-8"> <!-- Metadatos p/página -->
        <title> Lista de personas</title>
            <style>
                 td{
                     background-color: pink;
                    }   
            </style>
    </head>

        <body>
            <h1> Lista de personas </h1>
            <table border>
                <thead>
                    <tr>
                        <th> Nombre</th> 
                        <th> Fecha de Nacimiento</th> 
                        <th> Edad Actual</th> 
                        <th> Teléfono </th> 
                    </tr>
                </thead>    <!-- Etiqueta semántica, etiqueta personalizable con CSS -->
                
                <tbody>
                    <?php foreach ($lista as $p): ?>
                        <tr>
                            <td><?php echo $p->getNombre() ?></td> 
                            <td><?php echo $p->getFecNac() ?></td> 
                            <td><?php echo $p->getEdad() ?></td>
                            <td><?php echo $p->getTel() ?></td> 
                         </tr>
                        
                    <?php endforeach ?>
                
                 </tbody>
            </table>
         </body>
</html>