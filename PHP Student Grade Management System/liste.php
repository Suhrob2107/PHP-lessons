<fieldset>
    <legend align="center"><b>ÖĞRENCİ</b></legend>
    <form action="ekle.php" method="post">
        <table align="center" border="0">
            <tr><td>Ad</td><td><input type="text" name="ad"></td></tr>
            <tr><td>Vize</td><td><input type="text" name="vize"></td></tr>
            <tr><td>Final</td><td><input type="text" name="final"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" name="onay" value="Kaydet"></td></tr>
        </table>
    </form>
</fieldset>

<table  border="0" align="center" cellpaddin="5" cellspacing="2">
<tr><th>Ad</th><th>Vize</th><th>Final</th></tr>
<?php
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");
foreach($db -> query("SELECT * FROM bil",PDO::FETCH_BOTH) as $satir){
    echo "<tr align=left><td>$satir[ad]</td><td>$satir[vize]</td><td>$satir[final]</td><td align=center>$satir[ortalama]</td><td><a href='sil.php?x=$satir[id]'>Sil</a></td><td><a href='guncelle.php?x=$satir[id]&ad=$satir[ad]&v=$satir[vize]&f=$satir[final]'>Update</a></td></tr>";
}
?>
</table><hr>