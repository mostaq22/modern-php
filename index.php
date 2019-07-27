<?php
/* incldue autoload file */
include_once 'vendor/autoload.php';
/** import necceery classess */
use TT\Models\User;
use TT\Models\Member;

// create instance of User model
$user = new User();
$user->firstName = 'Mostaq';
$user->lastName = 'Mahmud';
$user->email = 'mostaqcse@gmail.com';
$user->save();
var_dump($user);





