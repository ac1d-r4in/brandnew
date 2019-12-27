<?php
class A {

}

Class B extends A {
  public function __construct($obj1) {
   $this->obj1 = $obj1;
 }
  protected $obj1;
}

Class C extends B {
  public function __construct($obj1, $obj2) {
   parent::__construct($obj1);
    $this->obj2 = $obj2;
  }
  protected $obj2;
}

$obj5 = new A();
$obj4 = new B($obj5);
$obj3 = new B();
$obj2 = new Ñ($obj4);
$obj1 = new C($obj2, $obj3);
?>