<?php
error_reporting(0);
$metin = "Q W E R T Y U I O P A S D F G H J K L";
$s = explode(" ",$metin);
$ara = $_GET["ara"];
echo "<table border='1' align='center'><tr style='font-size:80px;'>";
for($i=0;$i<count($s);$i++){
    if($s[$i] == $ara){
        echo "<td style='background-color:green;color:white;'>$s[$i]</td>";
    }
    else{
        echo "<td>$s[$i]</td>";
    }    
}
echo "</tr></table><br>";

?>

<center>
    <form action="metin.php" method="get">
        Metin gir:<input type="text" name="ara"><br><br>
        <input type="submit"> 
    </form>
</center>