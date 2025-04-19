<?php
error_reporting(0);
function div1($top,$left,$renk,$bg_1,$bg_2,$gen,$yuk,$golge){
    echo "<div style='position:absolute;
    top:$top;
    left:$left;
    border:solid $renk;
    width:$gen;height:$yuk;
    background:linear-gradient($bg_1,$bg_2);
    box-shadow:15px 10px $golge'></div>";
}
div1(100,75,"black","red","yellow",215,250,"gray");
div1(100,375,"black","blue","yellow",215,150,"gray");
div1(100,675,"black","black","white",215,450,"gray");
div1(100,975,"yellow","blue","green",215,150,"red");
?>