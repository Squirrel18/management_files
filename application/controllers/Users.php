<?php

use \Firebase\JWT\JWT;

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->helper('date');
    }

    public function log_in() {
        $this->load->helper('cookie');

        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('passcode', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->output->set_status_header(400);
        } else {

            $password = html_escape($this->input->get_post('passcode', TRUE));
            $password = password_hash($password, PASSWORD_DEFAULT);


            $query = $this->user_model->log_in(html_escape($this->input->get_post('user', TRUE)), html_escape($this->input->get_post('passcode', TRUE)));

            if(isset($query)) {
                $private_key = "Private&#160;Key&#160;For&#160;Creative&#160;Med";
                $token = array(
                    "iss" => "http://example.org",
                    "aud" => "http://example.com",
                    "iat" => now('COT'),
                    "nbf" => now('COT') + 86401,
                    "exp" => now('COT') + 86400
                );
                $jwt = JWT::encode($token, $private_key);

                $this->output->set_status_header(200);
                $this->output->set_header('Authorization: Bearer ' . $jwt);
            } else {
                $this->output->set_status_header(403);
            }
        }

        /*foreach($query as $index => $value):
            echo $query[$index];
        endforeach;*/
    }
}
?>