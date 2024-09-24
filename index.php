<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $x = 15;
            $y = 10;

            if ($x > $y) 
            {
                $result = "maggiore";

            } 
            elseif ($x < $y) 
            {
                $result = "minore";
            } 
            else 
            {
                $result = "uguale";
            }

            echo "<h1>$sx . è . $result . di . $y</h1>";

            $max_value = max($x, $y);

            if ($max_value < 10) 
            {
                echo "<p>$max_value minore di 10</p>";
            } 
            elseif ($max_value >= 10 && $max_value <= 20) 
            {
                echo "<p>$max_value compreso tra 10 e 20</p>";
            } 
            elseif ($max_value >= 21 && $max_value <= 30) 
            {
                echo "<p>$max_value compreso tra 21 e 30</p>";
            } 
            else 
            {
                echo "<p>$max_value maggiore di 30</p>";
            }
            
        ?>
    </ul>
</body>
</html>
