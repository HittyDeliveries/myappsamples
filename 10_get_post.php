<?php

// used to pass data through urls and forms 

// GET is used in both url and forms 
// while post is only used in forms


if(isset($_POST['submit'])){

    echo $_POST ['name'];

    echo $_POST ["age"];
}else{
    echo "enter your name and age in order to submit your form  ";
}

 
//action is where you input the fomr that yu want to submit data to 
?>

<a href="<?php echo $_SERVER['PHP_SELF']?> ?name=ekk&age=28">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
 
<div>
    <label for="name">Name</label>
    <input type="text" name="name">
</div>
<br>  
<div>
    <label for="age">Age</label>
    <input type="text" name="age">
</div>

<input type="submit" value="submit" name="submit">



</form>