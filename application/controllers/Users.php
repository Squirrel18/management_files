<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
    }

    public function log_in() {

        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('passcode', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->output->set_status_header(400);
        } else {

            $password = html_escape($this->input->get_post('passcode', TRUE));
            $password = password_hash($password, PASSWORD_DEFAULT);


            $query = $this->user_model->log_in(html_escape($this->input->get_post('user', TRUE)), html_escape($this->input->get_post('passcode', TRUE)));

            if(isset($query)) {
                $this->output->set_status_header(200);
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