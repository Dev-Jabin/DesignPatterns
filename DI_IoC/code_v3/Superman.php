<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 18:44:47
 * @Email:  yanjiapeng@dongqiudi.com
 */
include_once "Force.php";
include_once "SuperModuleInterface.php";

class Superman
{
	protected $module;
	public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}

$superModuel = new Force;
$superman = new Superman($superModuel);