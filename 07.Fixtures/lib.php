<?php

class Person {

	protected $params;

	public function __construct($params = array()) {
		$this->params = $params;
	}

	public function __call($name, $args = array()) {
		$result = null;

		if (preg_match('/^get(.+?)$/', $name, $matches)) {
			if (!empty($matches[1])) {
				$property = $matches[1];
				if (!empty($this->params[$property])) {
					$result = $this->params[$property];
				}
			}
		}
		elseif (preg_match('/^set(.+?)$/', $name, $matches)) {
			if (!empty($matches[1])) {
				$property = $matches[1];
				$this->params[$property] = $args[0];
				$result = true;
			}

		}
		else {
			throw new Exception("WTF?");
		}

		return $result;
	}

}

?>
