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
$env = parse_ini_file('cgi-bin/.env');
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
echo "Connected successfully";
mysqli_close($conn);
?>    

</body>
</html>
