<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function add($query) {
        $this->db->insert('cl_members', $query);
    }
    public function get_all() {
        $query = $this->db->get('cl_members');
        return $query->result();
    }
    public function get_member_type($id)
    {
    	$query = $this->db->get_where('cl_members_type', array('members_type_id' => $id));
        return $query->result();
    }
}