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

        foreach($fruits as $f => $value){
            echo "$value  $colours[$f] hota ha. <br>";
        }
    ?>
    <hr>
    <?php
        $no_fruits = ["apple"=>"red", "banana" => "yellow", "mango"=>"purple"];

        foreach ($no_fruits as $key => $value){
            echo "$key $value hot ha <br>";
        }
    ?>

<hr>
    <?php
        $pr_fruits = ["apple"=>["red","120kg"], "banana" => ["yellow","100 dozen"], "mango"=>["purple","200kg"]];

        foreach ($pr_fruits as $key => $value){
            echo "$key $value[0] hot ha or $value[1] hota ha <br>";
        }
    ?>
</body>
</html>