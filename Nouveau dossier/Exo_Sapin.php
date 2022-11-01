<?php
/*     *
    *  *  *
 *  *  *  *  *
*/
function sapin(int $n):void{
    $i=$n+1;
    $j=1;
    $es="  ";
    $ch=" * ";
    echo("<style>
    div{
        text-align:center;
    }
    </style>");
    echo("<div>");
    while($j<=$n){
        $i--;
        while($i>=1){
            echo($es);
            $es.="   ";
            $i--;
    }
    echo($ch);
    $i--;
        echo("<br>");
        $ch=$ch." * * ";
        $j++;
    }
    echo("</div>");
}
define("MIN",1);
define("MAX",50);
$j=rand(MIN,MAX);
echo($j."<br>");
sapin($j);
?>