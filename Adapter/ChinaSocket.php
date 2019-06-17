<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */
include_once "IChinaSocket.php";

class ChinaSocket implements IChinaSocket
{
	public function __construct()
	{
		echo "I hava a socket with two flat head\n";
	}

	public function powerWithFlat()
	{
		echo "powerd with two flat socket\n";
	}
}