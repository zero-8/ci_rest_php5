<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
}

require(FCPATH.'vendor/maltyxx/restserver/core/Restserver_controller.php');