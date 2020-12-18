

<?php
    class student 
    {
        public $id;
        public $name;
        public $email;
        private $password;

        //  function abc(){
        //      echo "alpha";
        //  }
    }
    $s1 = new student;//new object/instance.
    $s1 ->id = 1;
    $s1 ->name= "ali";
    $s1->email = $s1->name . "@gmail.com";
    // $s1 ->abc();

    $s2 = new student;
    $s2 ->id = 2;
    $s2 ->name= "khan";
    $s2->email = $s2->name . "@gmail.com";

    $students = [$s1, $s2]; //two object in array
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
<title>student id's foreach</title>
</head>
<body>
    <table class ="table table-light">
        <thead class = "thead-light">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($students as $item){ //loop on objects
                ?>

                <tr>
                    <td><?php echo $item->id; ?></td>
                    <td><?php echo $item->name; ?></td>
                    <td><?php echo $item->email; ?></td>
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