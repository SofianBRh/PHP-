
<?php
$firstname =$_GET["name"];
$Surname = $_GET["surname"];
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <header><div class="deco"></div></header>
    <form  action="http://localhost:3000/contact.php" method="get" >
        <input type="text" name="name" placeholder="Name" /><br/>
    <input type="text"  name="surname"placeholder="Surname" /></br>
 
        <input type="email"  name="mail" placeholder="Mail"/> </br>
        <input type="tel" name="phone"placeholder="Phone-Number"  /></br>
        <input type="text" name="postal" placeholder="Postal adress"></br>
        <input  type="submit"  value='submit' placeholder="submit">
        <input type="reset" placeholder="cancel">
    </form>
    
</body>
</html>
