<?php
include ("testClass.php");
$new_user= new testUser();
$new_user->name="Ivan";
$new_user->city="Moskow";
echo $new_user->islog();
if ($new_user->islog()==false){
    echo "Пользователь $new_user->name активен";
}else{
    echo "Пользователь $new_user->name не активен";
}