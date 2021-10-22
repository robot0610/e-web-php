<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>陣列練習</title>


</head>
<body>
<h1>陣列練習</h1>

<?php
    $name=[];
    $subject=['chinese','english','math','geography','history'];

    $name['judy']=['chinese'=>95,'english'=>64,'math'=>70,'geography'=>90,'history'=>84];
    $name['amo']=['chinese'=>85,'english'=>94,'math'=>60,'geography'=>70,'history'=>81];
    $name['john']=['chinese'=>65,'english'=>95,'math'=>53,'geography'=>69,'history'=>73];
    $name['peter']=['chinese'=>72,'english'=>84,'math'=>70,'geography'=>80,'history'=>91];
    $name['hebe']=['chinese'=>67,'english'=>91,'math'=>80,'geography'=>77,'history'=>89];

$student=array_keys($name);


echo "<pre>";
print_r($student);
echo "</pre>";

$subject=array_keys($name['peter']);
print_r($subject);

echo "</pre>";
        echo "Peter的國文成績為".$name['peter']['chinese']."分";


        
        
        ?>

</body>

</html>

