<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 18:44:47
 * @Email:  yanjiapeng@dongqiudi.com
 */
include_once "SuperModuleFactory.php";

class Superman
{
	protected $power = [];

	public function __construct(array $modules)
	{
		$factory = new SuperModuleFactory($modules);

		foreach ($modules as $mName => $mOptions) {
			$this->power[] = $factory->makeModule($mName, $mOptions);
		}
	}

	public function getPower()
	{
		return $this->power;
	}
}

$superParams = [
	"Flight" => [9, 80],
	'Shot' => [99, 50, 20]
];
$superman = new Superman($superParams);

echo "dump power:\n";
$power = $superman->getPower();
var_dump($power);