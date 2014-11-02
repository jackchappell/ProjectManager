<?php

class Template
{
	public static function get($name)
	{
		include_once "./-includes/templates/{$name}.php";
	}
}