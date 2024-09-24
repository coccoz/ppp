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
            $N = 28;
            echo "<h1>Divisori di $N</h1>";
            
            for ($i = 1; $i < $N; $i++) {
                if ($N % $i == 0) {
                    echo "<li>$i</li>";
                }
            }
        ?>
    </ul>
</body>
</html>
