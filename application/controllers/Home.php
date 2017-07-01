<?php

use \Firebase\JWT\JWT;

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index() {
        $test = password_hash("sistemas", PASSWORD_DEFAULT);

        if(password_verify('sistemas', $test)) {
            echo $this->input->get_request_header("Authorization");
        }
    }
}
?>