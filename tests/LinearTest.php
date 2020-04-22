<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../Shablakov/Linear.php';
include_once __DIR__ . '/../Shablakov/Square.php';
include_once __DIR__ . '/../Shablakov/MyException.php';
include_once __DIR__ . '/../Shablakov/Log.php';
class LinearTest extends TestCase {
	public function testLinear1() : void
	{
		$a = new Shablakov\Linear();
		$this->assertEquals([-2],$a->linearSolve(5,10));
	}
	public function testLinear2() : void
	{
        $a = new Shablakov\Linear();
        $this->assertEquals([0],$a->linearSolve(5,0));
	}
	public function testExpectException1() : void
	{
        $a = new Shablakov\Linear();
        $this->expectException(Shablakov\MyException::class);
        $a->linearSolve(0,5);
	}
	public function testExpectException2() : void
	{
        $a = new Shablakov\Linear();
        $this->expectException(Shablakov\MyException::class);
        $a->linearSolve(0,0);
	}
}
