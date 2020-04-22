<?php
namespace Shablakov;

use core;

// Линейное уравнение kx + b = 0
class Linear {
  // решение уравнения(ответ)
  protected $x = [];
  // уравнение целиком String
  protected $eq;

  public function __construct() {
  }

  public function linearSolve($k, $b) {
    try {
		if($k == 0) {
			throw new MyException($this->eq . " is not an equation");
		}
	} catch(MyException $ex) {
		Log::log($ex->getMessage());
	}
  	$this->eq = $k . "x + " . $b . " = 0";
    Log::log("Linear equation is entered " . $this->eq);
  	$this->x[] = ($b * -1)/$k;
    Log::log("Equation root " . $this->x . "\n");

	return $this->x;
  }
}
?>
