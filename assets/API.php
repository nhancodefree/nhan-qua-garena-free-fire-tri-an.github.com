<?php
session_start();
if(empty($_SESSION['facebook'])){
    echo '0';
}else{
    $items = array(1,2,3,4,5,6,7,8);
    echo $items[array_rand($items)];
}