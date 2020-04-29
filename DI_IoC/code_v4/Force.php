<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-29 10:26:34
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