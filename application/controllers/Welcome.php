<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include APPPATH . 'third_party/queue/bin.php';
    }

    public function index() {
        echo "Azul ayayethma";
        //$this->load->view('welcome_message');
        echo "<pre>";
        var_dump($server);
        echo "</pre>";
    }

}
