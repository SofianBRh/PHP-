<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$firstname =$_GET["name"];
$Surnamne = $_GET["surname"];
$Mail = $_GET["mail"];
$Phone = $_GET["phone"];
$Postal=$_GET["postal"];
$formdata =[$firstname,$Surname,$Mail,$Phone ,$Postal];



if(empty($firstname) || empty($Surname) || empty($Mail) || empty($Phone) || empty($Postal)){
echo'champs manquant';

}else

{

print_r($formdata);
} ?>


</body>

</html>