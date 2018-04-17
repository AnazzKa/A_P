<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function add($query) {
        $this->db->insert_batch('cl_receipts', $query);
    }
    public function get_all() {
        $query = $this->db->get('cl_catgeory');
        return $query->result();
    }    
}