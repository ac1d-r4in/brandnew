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
class SquareTest extends TestCase {
	public function SquareTest1() : void
	{
		$a= new Shablakov\Square();
	    $this->assertEquals([3,2],$a->solve(1, -5, 6));
	}
	public function testKvadrUr2() : void
	{
        $a= new Shablakov\Square();
        $this->assertEquals([0,-3],$a->solve(4, 12, 0));
	}
	public function testKvadrUr3() : void
	{
        $a= new Shablakov\Square();
        $this->assertEquals([0],$a->solve(7, 0, 0));
	}
	public function testExpectException1() : void
	{
        $a= new Shablakov\Square();
        $this->expectException(Shablakov\MyException::class);
        $a->solve(0,0,7);
	}
	public function testExpectException2() : void
	{
        $a= new Shablakov\Square();
        $this->expectException(Shablakov\MyException::class);
        $a->solve(4,0,36);
	}
}
