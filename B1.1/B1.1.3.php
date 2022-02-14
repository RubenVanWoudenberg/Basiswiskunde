<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 451;
    echo $n;
    echo "<br>";


    while($n != 1) {
        if($n % 2) {
            $n = $n % 2;
            // echo $n;
        }
        else {
            $n = $n * 3 + 1;
            // echo $n;
        }
    }
    echo $n;
    ?>
</body>
</html>