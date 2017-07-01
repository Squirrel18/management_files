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
        echo "<br>";

        $jwtH = array("alg" => "HS256", "typ" => "JWT");
        $jwtH = json_encode($jwtH);
        echo $jwtH . "<br>";
        echo base64_encode($jwtH);
        
    }
}
?>