<?php

namespace Phig;


interface RandomNumberGenerator
{
	/**
	 * @param  int $min
	 * @param  int $max
	 * @return int
	 */
	function generate($min, $max);
}
