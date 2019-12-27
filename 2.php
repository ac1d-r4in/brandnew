<?php

      //ax + b = 0

Class A {

    protected $x;
    public function __construct($result = 0) {
		$this->x = $result;
    }
	
    public function resh() {
        return $this->result;
    }
	
    public function X($v) {
        $this->x = $v;
    }
		
    public function find($a, $b) {
        $this->x = ($b * -1)/$a;
        return $this->x;
    }
}
	  
	  
      //ax^2 + bx + c = 0
	  
 Class B extends A {
    public function __construct($result = 0) {
        parent::__construct($result);             //
    }
    protected function disc($a, $b, $c) {
        return pow($b, 2) - 4 * $a * $c;
    }
		
    public function find2($a, $b, $c) {
	    if($a==0) {
			return $this->find($b, $c);  
		}
		$d = $this->disc($a, $b, $c);
		if ($d >= 0) {
			if($d > 0)  {
				$this->x = Array();
				$x1 = (-1 * $b + sqrt($d))/(2 * $a);
				$x2 = (-1 * $b - sqrt($d))/(2 * $a);
				array_push($this->x, $x1, $x2);
			} 
			if($d == 0) {
				$this->x = (-1 * $b)/(2 * $a);
			}
			return $this->x;
		} else {
		   	return false
		}
	}
 } 

      ?>