<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'Shablakov/Linear.php';
include_once 'Shablakov/Square.php';
include_once 'Shablakov/MyException.php';
include_once 'Shablakov/Log.php';

$arr=array();

Shablakov\Log::log('Version '.file_get_contents('./version'));

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new Shablakov\Square();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    Shablakov\Log::log("roots: " . implode(" , ", $roots));
   
}catch(Shablakov\MyException $e) {

    Shablakov\Log::log($e->getMessage());
}
Shablakov\Log::write();