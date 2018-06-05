<?php

function connectDb(){
    $host = "localhost";
    $dbName = "PHP";
    $login = "root";
    $password = "root";

    $db = new PDO("mysql:host=". trim($host) .";dbname=". trim($dbName), trim($login), trim($password));

    return $db;
}

$db = connectDb();

$req = $db->prepare("SELECT * FROM category");
$req->execute(array());

$data = $req->fetchAll();

foreach($data as $row) {
    echo $row['name'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Petit Comptable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
</body>
</html>