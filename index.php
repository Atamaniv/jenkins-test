<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#aaa;">
    Працює :)____<br/> 
<?php
$env = parse_ini_file('.env');
$DB_SERVER = $env["DB_SERVER"];
$DB = $env["DB"];
$DB_USER = $env["DB_USER"];
$DB_PASS = $env["DB_PASS"];

// Создаем соединение
$conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT idproducts, productname FROM products';
foreach ($conn->query($sql) as $row) {    
    print $row['idproducts'] . "\t";
    print $row['productname'] . "<br/>";
}
echo "Connected successfully";
mysqli_close($conn);
?>    

</body>
</html>
