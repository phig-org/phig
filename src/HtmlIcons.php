<?php

declare(strict_types=1);

namespace Phig;


interface HtmlIcons
{
	/**
	 * @param  string $icon
	 * @return HtmlString
	 */
	function get($icon);
}
