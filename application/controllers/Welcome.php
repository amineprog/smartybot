<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        require APPPATH . 'third_party/queue/bin.php';
    }

    public function index() {
        echo "Azul ayayethma";
        //$this->load->view('welcome_message');
        echo "<pre>";

        $server = IoServer::factory(
                        new HttpServer(
                        new WsServer(
                        new Chat()
                        )
                        ), 8080
        );
        var_dump($server);
        echo "</pre>";
    }

}
