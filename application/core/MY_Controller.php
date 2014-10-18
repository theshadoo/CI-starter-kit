<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require_once 'Admin_Controller.php';
require_once 'Public_Controller.php';

class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->config->load('debugbar');

		$this->output->enable_profiler($this->config->item('debugbar_enabled'));
	}

}
