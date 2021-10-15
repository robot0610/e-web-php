<h2>Diamond</h2>

<?php
$row=9

for($i=1;$i<=9;$i++)
{
    if($row%2!==0)
    {
        $row=$row+1
    }

    for($i=1;$i<row;$i++)
    {   
        $mid=($row+1)/2;

        if($i<=$mid){
            $stars=2*$i-1;
        }else{
            $stars=($row-$i)*2+1;
        }

        for($j=1;$j<=$stars;$j++)
    }
        echo"*";
    {
        echo"<br>";
        echo"<br>";
    }
}

 echo"<br>";

?>