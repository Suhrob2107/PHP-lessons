<?php
error_reporting(0);
function yatay($adet,$top,$left,$color,$value){
    for($i=1;$i<$adet;$i++){
        $s = $left + ($i * 10);
        echo "<h style='position:absolute;top:$top;left:$s;color:$color;'>$value</h>";
    }
}
function dikey($adet,$top,$left,$color,$value){
    for($i=1;$i<$adet;$i++){
        $s = $top + ($i * 10);
        echo "<h style='position:absolute;top:$s;left:$left;color:$color;'>$value</h>";
    }
}
yatay(100,200,200,'blue','A');
yatay(100,400,200,'green','B');
dikey(20,200,200,'yellow','C');
dikey(20,200,1200,'pink','D');
?>