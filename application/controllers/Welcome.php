<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function index() {
        echo "Azul ayayethma";
        //$this->load->view('welcome_message');
        echo "<pre>";

        echo "</pre>";
    }

}
