<?php
error_reporting(0);
$ad = $_POST["ad"];
$vize = $_POST["vize"];
$final = $_POST["final"];
$ortalama = [$vize * 0.40 + $final * 0.60];
$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");
$kaydet = $db -> query("INSERT INTO bil (ad,vize,final,ortalama) values ('$ad','$vize','$final','$ortlama')");
header("location:form.php");
?>


// Second example
<?php
$id=$_GET["id"];$ad=$_GET["ad"];$vize=$_GET["vize"];$f=$_GET["f"];
?>
<table><tr>
    <form action-"duzenleme.php" method-"POST">
    <td>id</td><td><input type="text" name="id" value="<?php $id;?>"</td>
    <tr><td>Ad</td><td><input type="text" name="ad" value="<?php echo $ad; ?>"></td>
    <tr><td>Vize</td><td><input type="text" name="vize" value="<?php echo $vize; ?>"></td>
    <tr><td>Final</td><td><input type="text" name="f" value="<?php echo $f; ?>"></td>
    <tr><td collspan=2 align=center><input type="submit" name="onay">
</form>
</tr></table>



<?php
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=proje;charset=utf8", "root", "");
$fkl_id = $_GET['fkl_id'];

$stmt = $db->prepare("SELECT blm_id, blm_ad FROM bolum WHERE fkl_id = ?");
$stmt->execute([$fkl_id]);
$bolumler = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($bolumler);
?>
