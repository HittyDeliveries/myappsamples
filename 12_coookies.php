<?php

//set coookie
setcookie('name','kogo', time()+ 86400*30);
//to use cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//to remove cookei 
setcookie('name','', time()- 86400)

?>