<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>teste</title>
    </head>
    <body>
        <h1>Estrutura de Controle</h1>
        <h2>if</h2>  
        <?php
            $item1 = true;
            $item2 = false;
            $item3 = false;
            $item4 = true;
            $colorTrue = 'green';
            $colorFalse = 'red';  

        ?>  
        <ul>
            <li style="color:<?php echo $item1 ? $colorTrue : $colorFalse ?>;">item 1</li>
            <li style="color:<?php echo $item2 ? $colorTrue : $colorFalse ?>;">item 2</li>
            <li style="color:<?php echo $item3 ? $colorTrue : $colorFalse ?>;">item 3</li>
            <li style="color:<?php echo $item4 ? $colorTrue : $colorFalse ?>;">item 4</li>
        </ul>
    </body>
</html>