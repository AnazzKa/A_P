<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function add($query) {
        $this->db->insert_batch('cl_payment', $query);
    }
    public function get_all() {
        $query = $this->db->get('cl_payment');
        return $query->result();
    }    
}