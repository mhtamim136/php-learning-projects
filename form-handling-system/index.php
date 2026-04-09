<?php
$insert = false;
if(isset($_POST['name'])){

    if(
        !empty($_POST['name']) &&
        !empty($_POST['age']) &&
        !empty($_POST['gender']) &&
        !empty($_POST['email']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['desc'])
    ){

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a connection
    $con = mysqli_connect($server, $username, $password);

    //Cheak for connection succcess
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    //Connect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `aiubtrip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;

    //Execute the query
    if($con->query($sql)==true){
        //echo "Successsfully Inserted";
       //flag for successful insertion
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    
    //close the database connection
    $con->close();
    }
    else{
        echo "<p style='color:red;'>All fields are required!</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://www.aiub.edu/Files/Uploads/original/banner-3.jpg" alt="AIUB IMG">
    <div class ="container">
        <h1>Welcome to AIUB to US trip form</h1>
        <P>Enter your details and submit this form to confirm your participation in the trip</P>
        <?php
        if(isset($insert) && $insert == true){
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see u joining with us.</p>";

        }
        
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="number" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="tel" id="phone" name="phone" placeholder="Enter Your Phone name">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button type="submit" class="btn">Submit</button>
            <!-- <button type="reset" class="btn">Reset</button> -->
        </form>
    
    </div>
    <!-- INSERT INTO `trip` (`slno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1', 'Tamim', '24', 'Male', 'tamim@this.com', '01857964218', 'This is the first time i created phpMyAdmin', current_timestamp()); -->

    <script src="index.js"></script>
</body>
</html>