<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background:#aaa;">
<div class="container">
   <h1> Xenogerion </h1>
</div>

<?php
/*$env = parse_ini_file('.env');
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
mysqli_close($conn);*/
?>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
