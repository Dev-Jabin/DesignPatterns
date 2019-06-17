<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */

include_once "ITicketSubject.php";

class TrainStation implements ITicketSubject
{
	public function sell()
	{
		echo "sell a ticket\n";
	}
}