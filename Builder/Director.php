<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Builder;

include "BuilderInterface.php";
include "LenovoBuilder.php";

class Director
{
	public function build(BuilderInterface $builder)
	{
		$builder->createMouse();
		$builder->createKeyboard();
		$builder->createScreen();

		return $builder->getPC();
	}
}