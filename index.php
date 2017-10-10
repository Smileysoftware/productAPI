<?php

use App\Classes\testClass;


require_once('App/bootstrap/bootstrap.php');
$app = new \App\Bootstrap\App();


$t = new testClass();

echo $t->test();