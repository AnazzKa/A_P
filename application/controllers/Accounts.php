<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Accounts extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('member_model');
        $this->load->model('accounts_model');
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
        if(isset($_REQUEST['anz']))
        {
            $str = $_REQUEST['anz'];
            $id = my_simple_crypt($str, 'd');
            $data['receipts_single_acc']=$this->accounts_model->get_single_acc_receipts($id);
            $data['payment_single_acc']=$this->accounts_model->get_single_acc_payment($id);
        }        
        $this->load->view('accounts', $data);
    }
    
    
}