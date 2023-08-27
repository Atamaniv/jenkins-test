<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#aaa;">
    Працює :)____4 
<?php
$servername = "localhost";
$database = "generatorue4_uafamily";
$username = "generatorue4_uafamily_admin";
$password = "Fenix12358";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>    

</body>
</html>
