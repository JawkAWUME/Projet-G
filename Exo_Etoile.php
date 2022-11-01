<?php
/*
Exercice 1
    Ex n= 3
    *
    *  *
    *  *   *  
*/
function etoile(int $n):void{
    $i=1;
    $ch=" * ";
    while($i<=$n){
        echo($ch);
        echo("<br>");
        $ch=$ch." * ";
        $i++;
    }
}
etoile(3);
?>
<?php
/*     *
    *  *  *
 *  *  *  *  *
*/
function sapin(int $n):void{
    $i=$n;
    $j=1;
    $ch=" * ";
    while($j<=$n){
        while($i>=1){
            echo("  ".$ch);
            $i--;
    }
    $i--;
        echo("<br>");
        $ch=$ch." * ";
        $j++;
    }
}
sapin(3);
?>