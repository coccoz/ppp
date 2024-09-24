<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        $var = rand(0,100);

        if($var%2==0)
        {
            echo "<p>il numero $var è pari</p>";
        }
        else
        {
            echo "<p>il numero $var è dispari</p>";
        }

        
   ?>
</body>
</html>