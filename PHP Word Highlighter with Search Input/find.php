<?php
error_reporting(0);
$metin = "kara kar ka k";
$s = explode(" ",$metin);
$ara = $_GET["ara"];
for($i=0;$i<count($s);$i++){
    if($s[$i] == $ara){
        echo "<font style='background:yellow;'><b> $s[$i] </b></font>";
    }
    else{
        echo "<font style='color:black;'><b> $s[$i] </b></font>";
    }
}
?>

<form action="ara.php" action="GET">
Metin gir<input type="text" name="ara">
<input type="submit">
</form>
