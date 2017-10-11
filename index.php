<?php

use App\Classes\dataClass;


require_once('App/bootstrap/bootstrap.php');
$app = new \App\Bootstrap\App();

$model = new dataClass();

$data = $model->getList();


view( 'home' ,  compact ('data') );