<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Add_receipt extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('receipt_model');
        $this->load->model('member_model');
        $this->load->model('category_model');
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
        $data['category']=$this->category_model->get_all();
        $this->load->view('add_receipt', $data);
    }    
    public function save()
    {
       $cpt = count($_POST['arr']);
            for ($i = 0; $i < $cpt; $i++) {
                $arr[] = array(
                    'amount' => $_POST['amt'],
                    'category_id' => $_POST['category'],
                    'member_id' => $_POST['arr'][$i]
                );
            }
            $result = $this->receipt_model->add($arr);
            if (!$result) {
                echo 1;
            } else {
                echo 0;
            }
    }
}