<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩</title>
    <style>
        .ball
        {
            width:30px;
            height:30px;
            background-color:lightgreen;
            margin:5px 0px;
            text-align:center;
            padding:10px 0 0px 0px ;
            border-radius:50%;
        }
    </style>
</head>
<body>
    <h1>威力彩選號不重複</h1>
<?php

$nums=[];
$i=0;

while(count($nums)<6)
{
    $t=rand(1,38);
    if(!in_array($t,$nums))
    {
        $nums[]=$t;
    }
    $i++;
}

echo "<pre>";
print_r($nums);
echo "</pre>";
echo "迴圈次數".$i;

echo "<br>";

foreach($nums as $num)
{
    echo "<div class='ball';>".$num."</div>";
}


?>
</body>
</html>