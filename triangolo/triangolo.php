<html>
<?php

$n= $_GET["n"];

$radio= $_GET["drone"];

if($radio=="triangolo"){
    for($i=1;$i<=$n;$i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "  *";
        }
        echo "<br>";
    }
}
if($radio=="quadrato"){
    for($i=1;$i<=$n;$i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo "  *";
        }
        echo "<br>";
    }
}
if ($radio=="triangolo inverso") {
    for($i=$n ;$i>=1;$i--) {

        for ($j = 1; $j <= $i; $j++) {
            echo "  *";
        }
        echo "<br>";
    }
}
if($radio=="cornice"){
    for($i=0;$i<=$n;$i++) {
        for ($j = 0; $j <= $n; $j++) {
            if($i==$n||$i==0||$j==0||$j==$n){
                echo "*   ";
            }else{
            echo "&nbsp &nbsp";
            }
        }
        echo "<br>";
    }
}
?>

<a class="btn btn-primary" href="triangolo.html" role="button">indietro</a>
</html>