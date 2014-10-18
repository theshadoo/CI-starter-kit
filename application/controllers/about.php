<?php


class About extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->lang->load('error');

        $this->config->load('i18n');

        $this->load->view('about.phtml');
    }

}
