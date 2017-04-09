<?php

/**
 * Description of WebHook
 *
 * @author rifi
 */
class WebHook extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //echo "this is the webHook";
        $access_token = "EAAFqBX7yOZCwBALfcYDxVwnUuFsbk4T0c0hgGkZAqYsI3bj29bIZAXA1lZA30KzZAGW6ZCzaOIdXN2YWzQYwVZBauewM1vSErZA7nZBwH9TKqjjeU3PrIh0ikU67bSQqvU6fmZBumVK95z4tXSv1iRhDvm9wDZCCKQS27G43bFw1qyfzgZDZD";
        $verify_token = "smartybot_my_messenger_bot_hehehehe";
        $hub_verify_token = null;

        if ($this->input->get('hub_challenge')) {
            $challenge = $this->input->get('hub_challenge');
            $hub_verify_token = $this->input->get('hub_verify_token');
        } else {
            // die("bad Request");
        }
        if ($hub_verify_token === $verify_token) {
            echo $challenge;
        }
        $file = realpath(APPPATH . '../' . '/response.txt');
        //file_put_contents($file, 'OK');
        if ($this->input->post()) {
            file_put_contents($file, json_encode($this->input->post()));
        }
    }

}
