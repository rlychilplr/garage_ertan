<?php
$db = new PDO("mysql:host=localhost;dbname=garage-ertan", "", "");
$query = $db->prepare("SELECT * FROM klant");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $item){
echo $item["id"] . "\t";
echo $item["naam"] . "\t";
echo $item["adres"] . "\t";
echo $item["postcode"] . "\t";
echo $item["woonplaats"] . "<br>";
}
?>
