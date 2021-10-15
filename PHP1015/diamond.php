<?php
    $row=18;
    if($row%2==0)
    {
        $row=$row+1;
    }

?>

<hr>



<?php
//from 阿信

$n=5;

//  判斷奇數或偶數

if($n%2 == 0){
    $n=$n+1;
}


for($i=1;$i<=$n;$i++){
    $mid=($n+1)/2;
    if($i<=$mid){
        $stars=2*$i-1;
        $space=$mid-$i;
    }else{
        $stars=($n-$i)*2+1;
        $space=($mid-1)-($n-$i);
    }
    for($j=1;$j<=$space;$j++){
        echo "&ensp;";
    }        
    for($j=1;$j<=$stars;$j++){
        echo '*';
    }
    echo "<br>";
    
}



?>