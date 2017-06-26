<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Welcome extends CI_Controller {

    public function index() {
        echo "Azul ayayethma";
        //$this->load->view('welcome_message');
    }

}
