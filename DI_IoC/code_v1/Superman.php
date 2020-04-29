<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 11:42:30
 * @Email:  yanjiapeng@dongqiudi.com
 */
include_once "Flight.php";
include_once "Force.php";
include_once "Shot.php";

class Superman
{
	protected $power = [];

	public function __construct()
	{
		$this->power[] = new Flight(9, 100);
        $this->power[] = new Force(45);
        $this->power[] = new Shot(99, 50, 2);
	}

	public function getPower()
	{
		return $this->power;
	}
}

$superman = new Superman;
echo "dump power:\n";
$power = $superman->getPower();
var_dump($power);