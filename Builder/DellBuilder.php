<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Parts\Keyboard;
use DesignPatterns\Builder\Parts\Mouse;
use DesignPatterns\Builder\Parts\Screen;

include "DellPC.php";
include "Parts/Keyboard.php";
include "Parts/Mouse.php";
include "Parts/Screen.php";

class DellBuilder implements BuilderInterface
{
	private $dellPc = null;
	private $mouse = null;
	private $screen = null;
	private $keyboard = null;

	function __construct()
	{
		$this->dellPc = new DellPC();
		$this->mouse = new Mouse();
		$this->keyboard = new Keyboard();
		$this->screen = new Screen();
	}

	public function createMouse()
	{
		$this->mouse->setMouseName("Dell Mouse");
		$name = $this->mouse->getMouseName();
		$this->dellPc->setParts($name);
	}

	public function createKeyboard()
	{
		$this->keyboard->setKbName("Dell Keyboard");
		$name = $this->keyboard->getKbName();
		$this->dellPc->setParts($name);
	}

	public function createScreen()
	{
		$this->screen->setScreenName("Dell Screen");
		$name = $this->screen->getScreenName();
		$this->dellPc->setParts($name);
	}

	public function getPC()
	{
		return $this->dellPc->getPC();
	}
}