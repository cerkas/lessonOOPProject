<?php
include ("testClass.php");
$new_user= new testUser();
$new_user->name="Ivan";
$new_user->city="Moskow";
var_dump($new_user);