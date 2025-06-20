<?php

declare(strict_types=1);

namespace Phig;


interface DateTimeFactory
{
	/**
	 * @return \DateTimeImmutable
	 */
	function create();
}
