<?php

// used to pass data through urls and forms 

// GET is used in both url and forms 
// while post is only used in forms


if(isset($_POST['submit'])){

// $name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
// $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
 $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
 
echo $name;
echo $age; 
};

 
//action is where you input the fomr that yu want to submit data to 
?>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>" method="POST">
 
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