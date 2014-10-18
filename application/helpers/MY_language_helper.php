<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**
* Extends language helper
* @param String $line tagname of lang array
* @param String [$id  = ''] ID is for label when you use form
* @return String
*/
if(! function_exists('__'))
{
	function __($line, $id = '')
	{
		return lang($line, $id);
	}
}
