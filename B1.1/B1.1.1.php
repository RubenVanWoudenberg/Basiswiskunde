<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> BMI calc </h1>
<?php
$BMIWeight = 90;     //KG
$BMIheight = 180;    //CM

$BMIheight = $BMIheight / 100;
$BMI = $BMIWeight / ($BMIheight * $BMIheight);

echo $BMI;
?>

<h1>Height calc </h1>
<?php
$Hweight = 90;   //kg
$HBMI = 18;      //bmi


?>

<h1>Weight calc </h1>
<?php
$Wheight = 200;  //cm
$WBMI = 35;      //bmi

$wheightm = $Wheight / 100;
$wWeight = $WBMI * ($wheightm * $wheightm);
?>

</body>
</html>
