<?php

namespace Phig;


interface DateTimeFactory
{
	/**
	 * @return \DateTimeImmutable
	 */
	function create();
}
