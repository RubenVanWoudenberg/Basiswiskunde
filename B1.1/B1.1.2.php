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
        $intarr = array(
            20,
            30,
            78,
            48,
            29,
            63,
            86,
            19,
            63,
            69,
            21,
            42,
            68,
            94,
            25,
            86,
            88,
            44,
            33,
            55
        );
    $Gemiddeld = ($intarr[0]+$intarr[1]+$intarr[2]+$intarr[3]+$intarr[4]+$intarr[5]+$intarr[6]+$intarr[7]+$intarr[8]+$intarr[9]+$intarr[10]+$intarr[11]+$intarr[12]+$intarr[13]+$intarr[14]+$intarr[15]+$intarr[16]+$intarr[17]+$intarr[18]+$intarr[19]) / 20;
    
    echo $Gemiddeld;
    ?>
</body>
</html>