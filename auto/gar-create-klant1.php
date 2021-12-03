<form method="post">

    <label>
        naam
        <input type="POST"  name="naam">
    </label><br>

    <label>
        klantadres
        <input type="text"  name="adres">
    </label><br>


    <label>
        postcode
        <input type="text"  name="postcode">
    </label>
    <br>
    <br>
    <label>
        klantplaats
        <input type="text"  name="woonplaats">
    </label>
    <br>
    <br>
    <input type="submit" name="submit">
    </form>


        <?php
        include "gar connectie.php";
        if(isset($_POST["submit"])) {

            sqlZonderresult($db, "insert into klant(naam,adres,postcode,woonplaats)
            values(:x, :adresplaceholder, :postcode, :woonplaats)",
            [
                "postcode"=> $_POST["postcode"],
                "x"  => $_POST["naam"],
                "adresplaceholder" => $_POST["adres"],
                "woonplaats" => $_POST["woonplaats"],
            ]);
          }
        ?>

