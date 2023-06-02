<?php 
//infomation stored in a varible on  a sever to be used across mutilple page 

session_start();

if(isset($_POST['submit'])){

    // $name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];
     
        if($username == 'ekk' && $password == 'password'){
            //set the session varible 
            $_SESSION['username']= $username;
            //redirect 
            header('Location:/php-crash/extras/dashboard.php');
        }  else{
             echo 'Incorrect login';
        }

    };
    
     
    //action is where you input the fomr that yu want to submit data to 
    ?>
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="POST">
     
    <div>
        <label for="username">Userame</label>
        <input type="text" name="username">
    </div>  
    
    <br>  
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    
    <input type="submit" value="submit" name="submit">
    
    
    
    </form>


