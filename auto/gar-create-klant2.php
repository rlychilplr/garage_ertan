
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tabel
    klant in de database garage.
</p>

<?php
error_reporting(0);
$return = $lookup_table[$key];
error_reporting(E_ALL);
return $return;
error_reporting(E_ALL); ini_set('display_errors', 'On');
//klantgegevens uit het formulier halen ---------------------------------
$id          = NULL; //komt niet uit her formulier (autoincrement)
$naam          = $_POST["naam"];
$adres       = $_POST["adres"];
$postcode      = $_POST["postcode"];
$woonplaats       = $_POST["plaats"];

//klantgegevenis invoeren in de tabel ------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("
                            insert into klant values
                            (
                             :id, :naam, :adres,
                             :postcode, :woonplaats
                            )
                            ");

//manier 1 (of manier 2 gebruiken) ---------------------------------------
// $sql->bindParam(":id",          $id);
// $sql->bindParam(":naam",        $naam);
// $sql->bindParam(":adres",       $klantadres);
// $sql->bindParam(":postcode",    $postcode);
// $sql->bindParam(":woonplaats",  $woonplaats);

//$sql-> execute();
//manier 2 ---------------------------------------------------------------
$sql->execute([
    "id"           =>$id,
    "naam"         =>$naam,
    "adres"        =>$adres,
    "postcode"     =>$postcode,
    "woonplaats"   =>$woonplaats,
]);
echo "De klant is toegevoegd <br>";
echo"<a href='gar-menu.php'> terug naar het menu <a/>";
?>
</body>
</html>