<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator: Decimalni u binarni</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.navbar {
    background-color: #333;
    overflow: hidden;
}

.navbar a {
    float: left;
    color: #fff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.navbar a:hover {
    background-color: #ddd;
    color: #333;
}

.navbar a.active {
    background-color: #4CAF50;
    color: #fff;
}

h1 {
    text-align: center;
    margin-top: 30px;
}

form {
    margin-top: 20px;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="number"] {
    padding: 5px;
}

button {
    padding: 8px 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

p {
    margin-top: 20px;
    text-align: center;
}
p.paragraf {
  text-align: center;
  font-size: 18px;
  margin-top: 20px;
  margin-right:10%;
  margin-left:10%;
  color: #333;
}

</style>
</head>
<body>
<div class="navbar">
    <a class="active" href="index.php">Kalkulator za binarne brojeve</a>
    <a  href="heksadekadski.php">Kalkulator za heksadekadske brojeve</a>
    <a   href="primjeri.php">Primjeri brojeva</a>
</div>

    <h1>Kalkulator: Decimalni u binarni</h1>

    <?php
    $rezultat = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $decimalniBroj = $_POST['decimalni'];

        // Pretvori decimalni broj u binarni broj
        $binarniBroj = decbin($decimalniBroj);


        $xml = new SimpleXMLElement('<rezultati></rezultati>');
        $pretvorba = $xml->addChild('pretvorba');
        $pretvorba->addChild('decimalni', $decimalniBroj);
        $pretvorba->addChild('binarni', $binarniBroj);

        $xml->asXML('rezultati.xml');

        $rezultat = 'Pretvorba uspješno obavljena. Binarni broj: ' . $binarniBroj;
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="decimalni">Unesite decimalni broj:</label>
        <input type="number" id="decimalni" name="decimalni" required>

        <button type="submit">Pretvori</button>
    </form>

    <p><?php echo $rezultat; ?></p>
    <hr/>
    <div class="space"></div>
  <p class="paragraf"> Kalkulator binarnih brojeva omogućuje korisniku da unese decimalni broj, a zatim vrši pretvorbu tog broja u binarni oblik. Binarni brojevi sastoje se samo od nula (0) i jedinica (1) i koriste se u digitalnoj logici i računalnim sustavima.

Kada korisnik unese decimalni broj i klikne na gumb "Pretvori", PHP kod vrši pretvorbu tog broja u binarni oblik pomoću decbin() funkcije. Binarni broj koji je generiran zatim se prikazuje na ekranu i sprema u XML dokument.
<hr/>
<p class="paragraf">
Primjerice, ako korisnik unese decimalni broj 10, kalkulator binarnih brojeva će ga pretvoriti u binarni oblik, odnosno broj 1010. Taj binarni broj će se prikazati na ekranu kao rezultat pretvorbe.
</p>
</body>
</html>
