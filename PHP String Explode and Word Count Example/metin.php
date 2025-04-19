<?php
$metin = "Ankara dan Antalya 525 km";
$s = explode(" ",$metin);

echo "Metin sayısı : ".count($s)."<br>";
for($i=0;$i<count($s);$i++)
echo $i." cumle : ".$s[$i]."<br>";
?>