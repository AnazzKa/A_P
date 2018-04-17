<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Add_member extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('member_model');
        $this->load->model('privilege_model');
        $this->check_isvalidated();
    }
    private function check_isvalidated() {       
       $this->session->userdata('validated');
        if ($this->session->userdata('validated') == '') {
            header('Location:Login');
        }
    }
    public function index() {
        $data['title'] = "Dashboard";
        $data['msg'] = '';
        if(isset($_POST['save']))
        {
            $query = array(
                    'time' => date('Y-m-d H:i:s'),
                    'full_name' => $this->input->post('name'),                    
                    'mobile' => $this->input->post('mobile')                    
                );
                $result = $this->member_model->add($query);
                if (!$result) {
                    $data['msg'] = 'Data Saved Sucessfully';
                } else {
                    $data['msg'] = 'Insertion Error';
                }
        }
        $this->load->view('add_member', $data);
    }
    
    
}