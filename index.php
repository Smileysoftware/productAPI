<?php

use App\Classes\dataClass;


require_once('App/bootstrap/bootstrap.php');
$app = new \App\Bootstrap\App();

$model = new dataClass();

$data = $model->getList();

//$t = new testClass();
//
//$status = $t->test();
//$status1 = $t->test();

view( 'home' ,  compact ('data') );