<html>
<body>
    <form action="tablo.php" method="get">
        LINE<input type="text" name="line"><br>
        COLUMN<input type="text" name="col"><br>
        <input type="submit">
    </form>    
</body>
</html>

<?php
 $line = $_POST["line"];
 $col = $_POST["col"];
 echo "<table border='1'>";
 for($l=1;$l<=$line;$l++)//; <- bu işareti yazdığımızda döngünden çıkıp sadece bir kez dönecek değere + 1 olarak eklenecek
 {
    echo "<tr>";
    for($c=1;$c<=$col;$c++)
    {
        echo "<td> $l - $c </td>";
    }
    echo "<tr>";
 }
 echo "</table>";
?>