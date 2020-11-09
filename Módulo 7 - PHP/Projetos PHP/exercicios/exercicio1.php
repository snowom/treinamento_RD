<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>


        <?php

            $produto1 = array(3,40,80,9000);
            $produto2 = array(5000,8,45,1090);
            $indice = 0;

        ?>

    <h1>Calculadora</h1>
    <ul>

        <li>
            <?php 
                echo "$produto1[$indice] * $produto2[$indice] = ". $produto1[$indice] * $produto2[$indice];
                $indice++;
            ?>
        </li>

        <li>
            <?php 
                echo "$produto1[$indice] / $produto2[$indice] = ". $produto1[$indice] / $produto2[$indice];
                $indice++;
            ?>
        </li>

        <li>
            <?php 
                echo "$produto1[$indice] + $produto2[$indice] = ". ($produto1[$indice] + $produto2[$indice]);
                $indice++;
            ?>
        </li>

        <li>
            <?php 
                echo "$produto1[$indice] - $produto2[$indice] = ". ($produto1[$indice] - $produto2[$indice]);
            ?>
        </li>
        
    </ul>    
</body>
</html>