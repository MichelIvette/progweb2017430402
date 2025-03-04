<html>
    <head>
        <title>Números Fibonacci</title>
    </head>
    <body>
        <?php
        $x1 = 0;
        $x2 = 1;
        $hasta = 2048;

        printf ("$x1, $x2");

        for ($i = 0; $i <= $hasta - 2; $i++) {
            $r = bcadd($x1, $x2); 
            printf (", $r");
            $x1 = $x2;
            $x2 = $r;
        }

        ?>
        </body>
        </html>