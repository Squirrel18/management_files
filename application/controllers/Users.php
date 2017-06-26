<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');

    }

    public function log_in() {
        
        $query = $this->user_model->log_in($this->input->get_post('user', TRUE));

        if(isset($query)) {
            echo "User found: " . $query['name'];
        } else {
            echo "User not found";
        }

        /*foreach($query as $index => $value):
            echo $query[$index];
        endforeach;*/
    }
}
?>