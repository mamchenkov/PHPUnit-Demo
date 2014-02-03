<?php

class BadNumberException extends Exception {
}

function addTwoNumbers($one, $two) {
	if (!is_numeric($one)) {
		throw new BadNumberException();
	}
	if (!is_numeric($two)) {
		throw new BadNumberException();
	}
	return $one + $two;
}
?>
