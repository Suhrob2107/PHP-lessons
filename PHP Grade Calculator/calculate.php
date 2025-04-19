<html>
<body>
    <form action="hesap.php" method="get">
        AD<input type="text" name="ad">
        VIZE<input type="number" name="v">;
        FI
        NAL<input type="number" name="f">;
        <input type="submit">
    </form>
</body>
</html>

<?php
$ad = $_POST["ad"];
$v = $_POST["v"];
$f = $_POST["f"];
$ort = ($v * 0.40 + $f * 0.60);
if($ort >= 70){
    echo "$ad - $ort ile <span style='color:green'> Geçti</span>";
}
else{
    echo "$ad - $ort ile <span style='color:red'> Kaldı";
}
 ?>