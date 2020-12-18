

<?php
    class mobile 
    {
        public $id;
        public $name;
        public $price;
        public $photo;

    }


    $s1 = new mobile;
    $s1 ->id = 1;
    $s1 ->name= "samsung";
    $s1->price =  "45,668";
    $s1->photo = 'img1.jpg';
    

    $s2 = new mobile;
    $s2 ->id = 2;
    $s2 ->name= "nokia";
    $s2->price =  "87,668";
    $s2->photo = 'img2.jpg';


    $s3 = new mobile;
    $s3 ->id = 3;
    $s3 ->name= "oppo";
    $s3->price =  "75,668";
    $s3->photo = 'img3.jpg';


    $mobiles = [$s1, $s2, $s3]; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>mobile list</title>
</head>
<body>
    <table class ="table table-light">
        <thead class = "thead-light">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($mobiles as $item){ 
                ?>

                <tr>
                    <td><?php echo $item->id; ?></td>
                    <td><img src="images/<?php echo $item->photo;?> "></td>                 
                    <td><?php echo $item->name; ?></td>
                    <td><?php echo $item->price; ?></td>
                </tr>

                <?php
            }
        ?>
        </tbody>
        

    
    </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>