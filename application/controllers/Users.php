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
            echo "no data";
        } else {
            $query = $this->user_model->log_in($this->input->get_post('user', TRUE), html_escape($this->input->get_post('passcode', TRUE)));

            if(isset($query)) {
                echo "User found: " . $query['name'];
            } else {
                echo "User not found";
            }
        }

        /*foreach($query as $index => $value):
            echo $query[$index];
        endforeach;*/
    }
}
?>