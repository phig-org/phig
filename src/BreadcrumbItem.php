<?php

declare(strict_types=1);

namespace Phig;


interface BreadcrumbItem
{
	/**
	 * @return non-empty-string
	 */
	function getLabel();


	/**
	 * @return Url|NULL
	 */
	function getUrl();
}
