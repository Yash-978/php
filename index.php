<?php
    // $arr=[1,2,3,4];
    // for($i=0;$i<=3;$i++)
    // {
    //     echo $arr[$i]."<br>";
    // }
    include("config.php");
    $c1 = new Config();
    // $c1->connect();

    // $btn_status=$_POST['button'];
    $is_btn_set = isset($_POST['button']);
    if($is_btn_set)
    {

        $name=$_POST['name'];
        $age=$_POST['age'];
        $course=$_POST['course'];
        $phone=$_POST['phone'];

        $c1->insert($name,$age,$course,$phone);

    }

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <center>
    <h1>Student Registration Form</h1>
    <form method="POST">
    <input type="text" placeholder="Name" name="name" ><br><br>
    <input type="number" placeholder="Age" name="age" ><br><br>
    <input placeholder="Phone" name="phone" ><br><br>
    <input type="text" placeholder="Course" name="course" ><br><br>
    <button name= "button" type= "submit">Submit </button>
    </form>
    </center>

</body>
</html>


