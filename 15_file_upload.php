<?php 
//check if the file was submited

if(isset($_POST['submit'])){
    //check if the data is an image buy using allwed extentions for imeges extentions(png,jpg)
    $allowed_ext = array('png','jpg', 'jpeg', 'gif');
    //check if the file was uploADED// where to store the file 
        if(!empty($_FILES['upload']['name'])){
            $fil_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $file_type = $_FILES['upload']['type'];
            //where to upload it to 
            
            $target_dir = __DIR__ . "/uploads/";

            // get the file extentions of the uploaded file 
            $file_ext = explode('.', $fil_name);
            $file_ext = strtolower(end($file_ext));

           //validate file extetion chek if the  file is an image
           if(in_array($file_ext, $allowed_ext)){
                //check the size 
                if($file_size <= 1000000){
                    //upload the file 
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color:green;">    File successfully uploaded </p>';
                }
           }else{
              $message =  '<p style="color:red;">Sorry, only png, jpg, jpeg, gif files are allowed.</p>';
           }

        }else{
            $message = '<p style="color:red;">Please choose a file </p>';
        }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Upload </title>
</head>
<body>

    <?php echo $message ?? null ?>
    <!-- file to upload file  -->
   <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method= "POST" enctype="multipart/form-data">
    <p>Select image to upload</p>
        <input type="file" name="upload" >
        <input type="submit" value="submit" name="submit">



</form>
</body>
</html>