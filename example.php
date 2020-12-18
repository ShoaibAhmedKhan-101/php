<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>
                <?php
                $x = 89;  
                $y = 66;

                if ($x == 89 or $y == 80) {
                    echo "x is true and y is false ";
                }
                echo "<br>";

                $x = "89";  
                $y = 66;

                if ($x === 89 or $y === 80) {
                    echo "x is true and y is false ";
                }
                else echo "value is not identical";
                echo "<br>";












                ?>  

</h3>
    
</body>
</html>