<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式產生陣列</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h1>利用程式產生陣列</h1>

<?php

$nine=[];

for($j=1;$j<=9;$j++)
{
    for($i=1;$i<=9;$i++)
    {
        $nine[]="$j x $i =" . ($j*$i);
    }
}

//echo "<pre>";
//print_r($nine);
//echo "</pre>";

for($i=0;$i<count($nine);$i++)
{
    echo $nine[$i];
    if($i%9==8)
    {
        echo "<br>";
    }
}





?>
    
</body>
</html>