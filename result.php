<!DOCTYPE html>
<html>
    <body>
        <?php
            $A = $_GET["a"];
            $B = $_GET["b"];
            $sum = 1;
            while($sum <= $B) {
                echo "คำที่แสดง: $A <br>";
                $sum++;
              } 
        ?>
    </body>
</html>