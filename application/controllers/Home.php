<?php

use \Firebase\JWT\JWT;

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('date');
    }

    public function index() {
        $test = password_hash("sistemas", PASSWORD_DEFAULT);

        if(password_verify('sistemas', $test)) {
            
        }

        $key = $this->input->get_request_header('Authorization', TRUE);

        $private_key = base64_encode("Private&#160;Key&#160;For&#160;Creative&#160;Med");
        $token = array(
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            "iat" => now('COT'),
            "nbf" => now('COT') + 86401,
            "exp" => now('COT') + 86400
        );


        $jwt = JWT::encode($token, $private_key);
        
        $decoded = JWT::decode($jwt, $key, array('HS256'));

        print_r($decoded);


    }
}
?>