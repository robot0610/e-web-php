<h2>迴圈數列 - 3.5.7.11.13.17.......97</h2>



<?php
echo "<br>";
echo "<br>";
for($i=3;$i<20;$i=$i*2+1)
{
    echo $i.",";
}

echo "<br>";
echo "<br>";
echo "<br>";




for($i=3;$i<100;$i++)
    {
    $test=false; // 表示質數
   for($j=2;$j<$i;$j++)
    if($i % $j == 0)
    {
        $test=true; //不是質數
    }

    if($test==false)
    {
        echo $i.",";
    }
}


?>