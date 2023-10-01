<?php


function debug_r($a)
{
    debug($a);

    die;
}

function debug($a)
{
    echo '<pre style="font-size: 20px;"> ';
    print_r($a);
}


?>