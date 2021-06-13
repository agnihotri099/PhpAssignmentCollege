<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<body>
<div style="margin:0px auto; padding:15px; width:400px; border:1px solid black;">

<form action="temp_conv.php" method="post">
    <h2>Temperature Conversion<h2>
    <p>
        Enter Temperature in celcius : <input type="number" name="number">
    </p>
    <input type="submit" value="convert">
    <br>
    <br>
    <hr>
    <br>
    <br>

</form>
</div>
<?php
$celcius = $_POST['number'];
$fahrenheit = (($celcius * 9)/5)+32;
echo("Temperature in Fahrenheit is : ");
echo($fahrenheit);
?>

</body>
</html>