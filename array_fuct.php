<strong>merge </strong>
<hr>
<?php
    $colors1 = ["black","white","silver"];
    $colors2 = ["blue","orange","yellow"];
    $merge = array_merge($colors1,$colors2);
    for ($i=0;$i<count($merge);$i++){
        echo $merge[$i];
        echo "<br>";
    }
?>
<hr>


<strong>array slice </strong>
<hr>
<?php
    $colors = ["black", "blue", "orange", "black", "silver"];

    $data1 = array_slice($colors, 0, 2);
    $data2 = array_slice($colors, 2, 2);

    echo var_dump($data1);
    echo "<br>";

    echo var_dump($data2);
    echo "<br>";

    echo var_dump($colors);

?>
<hr>


<strong>sort </strong>
<hr>
<?php
//original array is also affect
    $nums = [32,12,45,49,45,12,78];
     echo var_dump($nums);
     echo "<br>";

     sort($nums);
    echo var_dump($nums);

?>