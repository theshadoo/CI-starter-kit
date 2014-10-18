<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



abstract class REST_Controller extends MY_Controller
{

    /**
     * Defines the rest format output
     *
     * @var string|null
     */
    protected $rest_format          = null;

    /**
     * Defines the list of method properties such as limit, log and level
     *
     * @var array
     */
    protected $methods              = array();

    /**
     * List of allow HTTP methods send
     *
     * @var array
     */
    protected $allowed_http_methods = array(
        'get',
        'delete',
        'post',
        'put',
        'options',
        'patch',
        'head',
    );


    protected $request;


    protected $response = null;


    protected $rest = null;


    protected $_get_args = array();


    protected $_supported_formats = array(
        'xml'           => 'application/xml',
        'json'          => 'application/json',
        'jsonp'         => 'application/javascript',
        'serialized'    => 'application/vnd.php.serialized',
        'php'           => 'text/plain',
        'html'          => 'text/html',
        'csv'           => 'application/csv'
    );


    public function __construct()
    {
        parent::__construct();
    }

}
