<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */
include_once "IGerSocket.php";
include_once "IChinaSocket.php";

class SocketAdapter implements IGerSocket
{
	private $chinaSocket;

	public function __construct($chinaSocket)
	{
		$this->chinaSocket = $chinaSocket;
	}

	public function powerWithRound()
	{
		$this->chinaSocket->powerWithFlat();
	}
}