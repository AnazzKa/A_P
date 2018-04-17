<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function validate() {
        // grab user input
        $password=$this->security->xss_clean($this->input->post('password'));
        $encr_password=md5($password);
        $username = $this->security->xss_clean($this->input->post('username'));
            // Prep the query
            $this->db->where('username', $username);
            $this->db->where('password', $encr_password);
            // Run the query
            $query = $this->db->get('cl_users');
            // Let's check if there are any results
            if ($query->num_rows == 1) {
                // If there is a user, then create session data
                $row = $query->row();
                $data = array(
                    'userid' => $row->user_id,
                    'username' => $row->firstname,
                    'designation_id' => $row->designation_id,
                    'validated' => true
                );
                $this->session->set_userdata($data);
                return true;
            }
//        } 
        // If the previous process did not validate
        // then return false.
        return false;
    }

}

?>
