<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $fruits = ["Apple","Banana","Orange","Mango"];
        $colours = ["red","yellow","orange","yellow"];
        $i = 0;
        for($i; $i<count($fruits);$i++){
            echo "$fruits[$i]  $colours[$i] hota ha. <br>";
        }
    ?>
</body>
</html>