<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */
include_once "ChinaSocket.php";
include_once "SocketAdapter.php";

class Client
{
	private $gerSocket;
	public function setSocket($socket)
	{
		$this->gerSocket = $socket;
	}

	public function charge()
	{
		$this->gerSocket->powerWithRound();
	}
}

$chinaSocket = new ChinaSocket();
$client = new Client();
$socketAdapter = new SocketAdapter($chinaSocket);
$client->setSocket($socketAdapter);
$client->charge();