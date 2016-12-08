<?php


class Offices extends CI_Controller{

     
      
    public function index()
    {
        
        //echo"hello";
        $this->load->view('office');
    }
    public function __construct() {
      parent::__construct();
      $this->load->model("OfficeModel");
    }
    public function enlist() {
        $data = array(
       'Code' => $this->input->post('Code'),
       'City' => $this->input->post('City'),
       'Address1' => $this->input->post('Address1'),
       'Address2' => $this->input->post('Address2'),
            'dropdown' => $this->input->post('dropdown'),
            'Territory' => $this->input->post('Territory'),
            
);
        // Converting $data in json
$json_data['emp_data'] = json_encode($data);

// Send json encoded data to model
$return = $this->OfficeModel->insert_json_in_db($json_data);
if ($return == true) {
$data['result_msg'] = 'Json data successfully inserted into database !';
} else {
$data['result_msg'] = 'Please configure your database correctly';
}

// Load view to show message
$this->load->view("office", $data);
}

     
    }
    /*public function create(){
        
    }*/


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

