<?php
//required  config.php file 

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
    
    //check if the user has submited the forms
    if(isset($_POST['create'])){
        $first_name =$_POST['first_name'];
        $last_name= $_POST['last_name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $password = $_POST['password'];
        //sql comand
        $sql = "INSERT INTO users(first_name, last_name,email,phone,password) VALUES (?,?,?,?,?)";
        $stminsert =$db-> prepare($sql);
        $result =$stminsert -> execute([$first_name,$last_name,$phone, $password]);
        if($result){
            echo "User Registered Successfully";
        }else{
            echo "Error Orccored while submiitting your form";
        }

        // echo $first_name. "" . $last_name ." ". $email . " ".$phone." " .$password;

    }

    ?>    

<div>
    <form action="registration.php" method="post">
        <div class="container">
            <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with the correct value </p>
                        <hr class="mb-3">

                        <label for="firs_tname"><b>First Name</label>
                        <input class="form-control" type="text" name="first_name" required>

                        <label for="last_name"><b>Last Name</label>
                        <input class="form-control" type="text" name="last_name" required>

                        <label for="email"><b>Email Address</label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="phone"><b>Phone_Numeber</label>
                        <input class="form-control" type="text" name="phone" required>

                        <label for="password"><b>Password</label>
                        <input class="form-control" type="password" name="password" required>

                        <hr class="mb-3">

                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                    </div>    
            
        </div>
    </form>
</div>
</body>
</html>