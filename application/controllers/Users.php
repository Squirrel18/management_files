<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        #$this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function log_in() {
        echo $this->input->get_post('user', true);
    }
}
?>