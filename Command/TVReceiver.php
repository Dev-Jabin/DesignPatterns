<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-28
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Command;

class TVReceiver
{
	public function actionOn()
	{
		echo "exec command on, open the TV\n";
	}

	public function actionOff()
	{
		echo "exec command off, close the TV\n";
	}
}