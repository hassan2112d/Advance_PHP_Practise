<?php

echo 'hii my name is Hassan <br>';

//Cookies | Sessions

//Cookies store data which are normal to show it is not a sensitive data for example : Categories , videos , like that.
//Session store data which are sensitive and also used to secure data from hackers for example : username , password , id etc.

setcookie("Category","Announcemnet",time() + 86400,"/");

echo "Cookie is all set";


?>