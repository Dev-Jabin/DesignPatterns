<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 17:57:20
 * @Email:  yanjiapeng@dongqiudi.com
 */
class Flight
{
	protected $speed;
    protected $holdtime;
    public function __construct($speed, $holdtime) {
    	$this->speed = $speed;
    	$this->holdtime = $holdtime;
    	echo __METHOD__ . "\n";
    	echo "Get Flight Power Speed:" . $speed . " Holdtime:" . $holdtime . "\n";
    }
}