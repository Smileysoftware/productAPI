<?php

use App\Classes\testClass;


require_once('App/bootstrap/bootstrap.php');
$app = new \App\Bootstrap\App();


$t = new testClass();

$status = $t->test();
$status1 = $t->test();

view( 'home' ,  compact ('status' , 'status1') );