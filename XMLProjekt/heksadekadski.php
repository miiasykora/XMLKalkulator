<?php
$rezultat = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $decimalniBroj = $_POST['decimalni'];
    $heksadekadskiBroj = dechex($decimalniBroj);
    $rezultat = 'Pretvorba uspješno obavljena. Heksadekadski broj: ' . $heksadekadskiBroj;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator: Decimalni u heksadekadski</title>
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
    </style>
</head>
<body>
<div class="navbar">
    <a  href="index.php">Kalkulator za binarne brojeve</a>
    <a class="active" href="heksadekadski.php">Kalkulator za heksadekadske brojeve</a>
    <a  href="primjeri.php">Primjeri brojeva</a>
</div>

    <h1>Kalkulator: Decimalni u heksadekadski</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="decimalni">Unesite decimalni broj:</label>
        <input type="number" id="decimalni" name="decimalni" required>

        <button type="submit">Pretvori</button>
    </form>

    <p><?php echo $rezultat; ?></p>
    <hr/>
    <p class="paragraf"> Kalkulator binarnih brojeva omogućuje korisniku da unese decimalni broj, a zatim vrši pretvorbu tog broja u binarni oblik. Binarni brojevi sastoje se samo od nula (0) i jedinica (1) i koriste se u digitalnoj logici i računalnim sustavima.

    Kalkulator heksadekadskih brojeva omogućuje korisniku da unese decimalni broj, a zatim vrši pretvorbu tog broja u heksadekadski oblik. Heksadekadski brojevi koriste se za prikazivanje brojeva u bazi 16, gdje se koriste znamenke od 0 do 9, zajedno s slovima A, B, C, D, E i F, koja predstavljaju brojeve od 10 do 15.

Kada korisnik unese decimalni broj i klikne na gumb "Pretvori", PHP kod vrši pretvorbu tog broja u heksadekadski oblik pomoću dechex() funkcije. Heksadekadski broj koji je generiran zatim se prikazuje na ekranu.
<hr/>
<p class="paragraf">
Na primjer, ako korisnik unese decimalni broj 255, kalkulator heksadekadskih brojeva će ga pretvoriti u heksadekadski oblik, odnosno broj FF. Taj heksadekadski broj će se prikazati na ekranu kao rezultat pretvorbe.
</p>
</body>
</html>
