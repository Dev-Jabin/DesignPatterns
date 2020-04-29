<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 17:57:26
 * @Email:  yanjiapeng@dongqiudi.com
 */
class Force
{
	protected $force;
    public function __construct($force) {
    	$this->force = $force;
    	echo __METHOD__ . "\n";
    	echo "Get Force Power Force:" . $force . "\n";
    }
}