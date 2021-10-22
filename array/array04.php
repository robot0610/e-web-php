<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找出五百年內的閏年</title>
</head>
<body>
<h1>找出五百年內的閏年</h1>

<?php

$year=2021;
$leaps=[];

for($i=$year;$i<=($year+500);$i++)
{
    if($i=$year % 400 ==0 || ($year %4 ==0 && $year % 100 !=0))
    {
    echo "西元".$year . "元是閏年";
    } else
    
    {
    echo "西元". $year . "元不是閏年";
    }
}
    if(in_array(2152,$leaps))
    {
        echo 2152 . "是閏年";
    }
    else{
        echo 2152 . "不是閏年";
        }

?>
    
</body>
</html>