<?php
class UnitTest extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop()
	{
		$user = array();
		$this->assertEquals(0, count($user));

		array_push($user, 'hoge');
		$this->assertEquals('hoge', $user[0]);
		$this->assertEquals(1, count($user));

		$this->assertEquals('hoge', array_pop($user));
		$this->assertEquals(0, count($user));
	}

	public function testArray()
	{
		$array = array();
		$this->assertEquals(0, count($array));
	}

}
