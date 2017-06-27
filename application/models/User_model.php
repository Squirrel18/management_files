<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function log_in($user, $pass) {
        $query = $this->db->get_where('users', array('number' => $user, 'password' => $pass, 'state' => 1));
        return $query->row_array();
    }
}
?>