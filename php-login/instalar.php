<?php

$config = include 'database.php';

try{
    $conn = new PDO('mysql:host='.$config['db']['server'], $config['db']['username'],$config['db']['password'],$config['db']['option']);
    $sql = file_get_contents("DATA/migracion.sql");
    $conn->exec($sql);
    echo "La base de datos de los usuarios se ha creado exitosamente";
} catch(PDOException $error){
    echo $error->getMessage();
}
?>

