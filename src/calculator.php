<html>
<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="calculator.php" method="get">
    Numero 1: <input type="number" name ="num1">
    <br>
    Numero 2: <input type="number" name ="num2">
    <br>
    <input type="submit" name="Suma" value="Sumar">
    <input type="submit" name="Resta" value="Restar">
    <input type="submit" name="Multi" value="Multiplicar">
    <input type="submit" name="Div" value="Dividir">
</form>
<br>
<?php
$Suma="";
$Rest="";
$Multi="";
$Div="";

if(isset($_POST['Suma']))$Suma=$_POST['Suma'];
if(isset($_POST['Resta']))$Resta=$_POST['Resta'];
if(isset($_POST['Multi']))$Multi=$_POST['Multi'];
if(isset($_POST['Div']))$Div=$_POST['Div'];

if($Suma){
    Suma: echo $_GET["num1"] + $_GET["num2"];
}

if($Resta){
    Resta: echo $_GET["num1"] - $_GET["num2"];
}

if($Multi){
    Multiplicacion: echo $_GET["num1"] * $_GET["num2"];
}

if($Div){
    Divicion: echo $_GET["num1"] / $_GET["num2"];
}
?>
</body>
</html>
