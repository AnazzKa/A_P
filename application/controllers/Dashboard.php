<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Dashboard extends CI_Controller {
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
        $data['members']=$this->member_model->get_all();
        $this->load->view('dashboard', $data);
    }
    
    
}
