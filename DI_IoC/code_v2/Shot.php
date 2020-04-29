<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 17:57:31
 * @Email:  yanjiapeng@dongqiudi.com
 */
class Shot
{
	protected $atk;
    protected $range;
    protected $limit;
    public function __construct($atk, $range, $limit) {
    	$this->atk = $atk;
    	$this->range = $range;
    	$this->limit = $limit;
    	echo __METHOD__ . "\n";
    	echo "Get Shot Power Atk:" . $atk . " Range:" . $range . " Limit:" . $limit ."\n";
    }
}