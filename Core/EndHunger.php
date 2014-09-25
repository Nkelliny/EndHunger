<?php

namespace EndHunger\Core;

use Cake\Core\App;

class EndHunger extends App {

	public static $existsInBaseCallback;

	protected static function _classExistsInBase($name, $namespace) {
		$callback = static::$existsInBaseCallback;
		return $callback($name, $namespace);
	}

}
