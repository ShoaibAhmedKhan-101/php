<?php
class category{
	public $id;
    public $name;
  }

$cat1=new category;
$cat1->id= 1;
$cat1->name="Mobiles";

$cat2=new category;
$cat2->id=2;
$cat2->name="Cameras";

$cat3=new category;
$cat3->id=3;
$cat3->name="Watches";


$cat_s = [$cat1,$cat2,$cat3];

?>




<?php
    class mobile 
    {
        public $name;
        public $price;
        public $image;
    }

    class camera 
    {
        public $name;
        public $price;
        public $image;
    }

    class watch 
    {
        public $name;
        public $price;
        public $image;
    }

//mobile objects
    $m1 = new mobile;
    $m1->name= "Samsung";
    $m1->price= "Rs:  45,000";
    $m1->image= "m1.jpg";

    $m2 = new mobile;
    $m2->name= "Oppo";
    $m2->price= "Rs:  35,000";
    $m2->image= "m2.jpg";

    $m3 = new mobile;
    $m3->name= "Nokia";
    $m3->price= "Rs:  25,000";
    $m3->image= "m3.jpg";

    $m4 = new mobile;
    $m4->name= "Vivo";
    $m4->price= "Rs:  55,000";
    $m4->image= "m4.jpg";

    $mobiles = [$m1, $m2, $m3, $m4];



//camera objects

    $c1 = new camera;
    $c1->name= "Nikon";
    $c1->price= "Rs:  45,000";
    $c1->image= "c1.jpg";

    $c2 = new camera;
    $c2->name= "Samsung";
    $c2->price= "Rs:  35,000";
    $c2->image= "c2.jpg";

    $c3 = new camera;
    $c3->name= "Sony";
    $c3->price= "Rs:  25,000";
    $c3->image= "c3.jpg";

    $c4 = new camera;
    $c4->name= "Canon";
    $c4->price= "Rs:  55,000";
    $c4->image= "c4.jpg";

    $cameras = [$c1, $c2, $c3, $c4];


//watche objects

    $w1 = new watch;
    $w1->name= "Rolex";
    $w1->price= "Rs:  45,000";
    $w1->image= "w1.jpg";

    $w2 = new watch;
    $w2->name= "Titan";
    $w2->price= "Rs:  35,000";
    $w2->image= "w2.jpg";

    $w3 = new watch;
    $w3->name= "Casio";
    $w3->price= "Rs:  25,000";
    $w3->image= "w3.jpg";

    $w4 = new watch;
    $w4->name= "Piaget";
    $w4->price= "Rs:  55,000";
    $w4->image= "w4.jpg";

    $watches = [$w1, $w2, $w3, $w4];

   


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
<title>Products</title>
<style>
    img{height: 125px;}
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" style="border-right: 1px solid black;height:100pc">
                <h4>Categories</h4>

                <?php
                    foreach($cat_s as $item){
                ?>

                    <li class="list-unstyled ml-5"><a href="mobile.php?cid=<?php echo $item -> id  ?>" class="text-success" style="font-size: large;"><?php echo $item -> name  ?></a></li>
                </ul>

                <?php } ?>

            </div>

            <div class="col-10"> 
                <div class="row" style="margin-top: 20px;">

                <?php
    	            if (isset($_GET['cid'])) {
                        if ($_GET['cid'] == 1) { 
   
                            foreach ($mobiles as $item) {

                ?>
                
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 style="text-align: center;"><?php echo $item->name ?></h3>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <img src="images/<?php echo $item->image ?>" alt="">
                            </div>
                            <div class="card-footer">
                                <h5 style="color: red;"><?php echo $item->price ?></h5>
                            </div>

                        </div>
                    </div>

                    <?php
                        }
                        }
                        elseif($_GET['cid'] == 2) { 

                        foreach ($cameras as $item) {
                    ?>


                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 style="text-align: center;"><?php echo $item->name ?></h3>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <img src="images/<?php echo $item->image ?>" alt="">
                            </div>
                            <div class="card-footer">
                                <h5 style="color: red;"><?php echo $item->price ?></h5>
                            </div>

                        </div>
                    </div>


                    <?php
                        }
                        }
                        else { 

                        foreach($watches as $item) {

                    ?>

                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 style="text-align: center;"><?php echo $item->name ?></h3>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <img src="images/<?php echo $item->image ?>" alt="">
                            </div>
                            <div class="card-footer">
                                <h5 style="color: red;"><?php echo $item->price ?></h5>
                            </div>

                        </div>
                    </div>

                    <?php
                        }
                        }
                        }
                    ?>
                        
                </div>
                
            </div>

        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>