<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function SQLMetResult($db, $commando){
    $query = $db->prepare($commando);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function SQLZonderResult($db, $commando, $values){
    $query = $db->prepare($commando);
    $query->execute($values);
}
$db = new PDO("mysql:host=localhost;dbname=garage ertan", $username = "root", $password = "");
?>
