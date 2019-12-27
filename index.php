<?php
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "core/EquationInterface.php";
include "Shablakov/MyException.php";
include "Shablakov/Log.php";
include "Shablakov/Linear.php";
include "Shablakov/Square.php";

use Shablakov\Log;
use Shablakov\Square;
use Shablakov\Linear;
use Shablakov\MyException;
/*
include "core/loginterface.php";
include "core/logabstract.php";
include "core/equationinterface.php";
include "Shablakov/log.php";
include "Shablakov/myexception.php";
include "Shablakov/linear.php";
include "Shablakov/square.php";
*/

echo "Enter koefs a, b, c \n";

for($i = 0; $i < 3; $i++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[] =  $number;
}

$equation = new Square();
$equation->solve($kfArray[0], $kfArray[1], $kfArray[2]);
Log::write();

?>
