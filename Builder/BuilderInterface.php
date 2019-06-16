<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder;

interface BuilderInterface
{
	public function createMouse();

	public function createKeyboard();

	public function createScreen();

	public function getPC();
}