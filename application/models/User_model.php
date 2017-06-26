<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function log_in($user) {
        $query = $this->db->get_where('users', array('number' => $user, 'state' => 1));
        return $query->row_array();
    }
}
?>