<?php
error_reporting(0);
$sayac = 0;
$ara = $_GET["ara"];
$metin = "kara kar ka k";
echo "<table border='1' cellpadding='10' align='center'><tr>";
for($i=0;$i<strlen($metin);$i++){
    if(substr($metin,$i,1) == $ara){
        echo "<td style='background:orange;'>$metin[$i]</td>";
        $sayac++;
    }
    else{
        echo "<td style='background:white;'>$metin[$i]</td>";
    }
}
echo "</tr></table><br>";

?>


<center>
<form action="substr.php" action="GET">
    <input type="text" name="ara"><br><br>
    <input type="submit">
</form>
</center>
