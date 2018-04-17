<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Accounts_model extends CI_Model {

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
    public function get_single_acc_receipts($id)
    {
        $this->db->select('*');
        $this->db->from('cl_receipts');
        $this->db->join('cl_members', 'cl_receipts.member_id = cl_members.member_id');
        $this->db->join('cl_catgeory', 'cl_receipts.category_id = cl_catgeory.category_id');
        $this->db->where('cl_receipts.member_id', $id);
        $query = $this->db->get();        
        return $query->result();
    }
    public function get_single_acc_payment($id)
    {
        $this->db->select('*');
        $this->db->from('cl_payment');
        $this->db->join('cl_members', 'cl_payment.member_id = cl_members.member_id');
        $this->db->join('cl_catgeory', 'cl_payment.category_id = cl_catgeory.category_id');
        $this->db->where('cl_payment.member_id', $id);
        $query = $this->db->get();        
        return $query->result();
    }
}