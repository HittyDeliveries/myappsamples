<?php
//abblity  to read and  write files on a server

$file = 'extras/user.txt';

//check if the file exit
 if(file_exists($file)){
    $handle = fopen($file, 'r');
    $contents =fread($handle, filesize($file));
        fclose($handle);
   
        echo $contents;    
 } else{
    $handle = fopen($file, 'w');
    $contents = 'Ekk'. PHP_EOL. 'Sara'. PHP_EOL. 'MIKE';
    fwrite($handle, $contents);
    fclose($handle);

 }






?>