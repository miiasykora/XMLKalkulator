<!DOCTYPE html>
<html>
<head>
    <title>Tablica brojeva</title>
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
        table {
  border-collapse: collapse;
  width: 100%;
}

table td,
table th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

table th {
  background-color: #f2f2f2;
}

table tr:nth-child(even) {
  background-color: #f9f9f9;
}

table tr:hover {
  background-color: #e9e9e9;
}

table td:hover {
  cursor: pointer;
  font-weight: bold;
}

table td:active {
  background-color: #c5c5c5;
}

    </style>
</head>
<body>
<div class="navbar">
    <a  href="index.php">Kalkulator za binarne brojeve</a>
    <a  href="heksadekadski.php">Kalkulator za heksadekadske brojeve</a>
    <a  class="active" href="primjeri.php">Primjeri brojeva</a>
</div>
    <h1>Tablica brojeva</h1>

    <table>
        <caption>Brojevi od 1 do 50</caption>
        <tr>
            <th>Decimalni</th>
            <th>Binarni</th>
            <th>Heksadekadski</th>
        </tr>
        <?php
 
        $xml = simplexml_load_file('brojevi.xml');

        foreach ($xml->broj as $broj) {
            $decimalni = (int)$broj->decimalni;
            $binarni = (string)$broj->binarni;
            $heksadekadski = (string)$broj->heksadekadski;

            echo '<tr>';
            echo '<td>' . $decimalni . '</td>';
            echo '<td>' . $binarni . '</td>';
            echo '<td>' . $heksadekadski . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
