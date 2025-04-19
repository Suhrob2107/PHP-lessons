<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ders Kaydet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        a {
            color: violet;
            text-decoration: none;
            font-family: Cooper;
            font-size: 20px;
        }
        a.ic {
            color: brown;
            text-decoration: none;
            font-family: Candara;
            font-size: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        .btn-primary {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form id="contact-form" action="derskaydet.php" method="POST" class="tm-contact-form">
    <label>Ders'i hangi Fakülte'deki Bölüme kaydetmek istersiniz?</label>
    <table>
        <?php
        $x = isset($_GET['x']) ? $_GET['x'] : null;
        $db = new PDO("mysql:host=localhost;dbname=deu;charset=utf8", "root", ""); 

        foreach ($db->query("SELECT * FROM fakulte", PDO::FETCH_ASSOC) as $fak) {
            if ($fak['f_id'] == $x) {
                echo "<tr bgcolor='#006699'><td colspan='2'><a href='ders.php' style='color:white' class='aeleman'>$fak[f_ad]</a></td></tr>"; 
                foreach ($db->query("SELECT * FROM bolum WHERE f_id=$x", PDO::FETCH_ASSOC) as $bol) {
                    echo "<tr><td bgcolor='#344C64'><a class='ic' href='ders.php?b_id=$bol[b_id]' title='$bol[b_ad]'><li>$bol[b_ad]</li></a></td></tr><br>"; 
                }
            } else {
                echo "<tr bgcolor='white'><td align='left'><a href='ders.php?x=$fak[f_id]' class='aeleman'>$fak[f_ad]</a></td></tr><br>"; 
            }
        }
        ?>
    </table>

    <?php
    $b_id = isset($_GET['b_id']) ? $_GET['b_id'] : null;
    foreach ($db->query("SELECT * FROM bolum WHERE b_id=$b_id", PDO::FETCH_BOTH) as $bolum) {
        if ($bolum["b_id"] != "") {
            echo "<label>Bu Bölümü seçtiniz!</label>";
            echo "<input type='text' name='b_id' class='form-control rounded-0' value='$bolum[bAdi]' disabled /><br>";
        }
    }
    ?>

    <input type="text" name="dersAdi" class="form-control rounded-0" placeholder="Ders Adı" required /><br>
    <input type="text" name="t" class="form-control rounded-0" placeholder="T" required /><br>
    <input type="text" name="u" class="form-control rounded-0" placeholder="U" required /><br>
    <input type="text" name="akts" class="form-control rounded-0" placeholder="AKTS" required /><br>
    <input type="text" name="tk" class="form-control rounded-0" placeholder="TK" required /><br>
    <input type="number" name="dNo" class="form-control rounded-0" placeholder="Dönem Giriniz" required /><br>
    <input type="submit" class="btn btn-primary" value="Kaydet">
</form>

</body>
</html>
