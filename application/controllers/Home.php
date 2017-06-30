<?php
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index() {
        $test = password_hash("sistemas", PASSWORD_DEFAULT);

        if(password_verify('sistemas', $test)) {
            echo "deal with it";
        }

        echo base_url();

        /*$p = new OAuthProvider();

        $t = $p->generateToken(4);*/
        
    }
}
?>