<!-- //Scope and global and locals variables in php/// -->

<?php

echo "Welcome to Scope ,locals and gloabal variables in php <br>";

$a = 20;

echo "$a <br>";

function local(){
    global $a;

    $a = 40;

    echo "hello world $a <br>";
}
local();
echo "hiii $a";
?>