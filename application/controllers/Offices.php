<?php


class Offices extends CI_Controller{

     
      public function __construct() {
      parent::__construct();
       $this->load->database();
      $this->load->model("OfficeModel");
      
    }
    public function index()
    {
        
        $data = array();
        
        
        $this->load->database();  
         //load the model  
         $this->load->model('OfficeModel');  
         //load the method of model  
         $data['h']=$this->OfficeModel->getOffice();  
         //return the data in view  
         $this->load->view('office1', $data);
      
        
    }
    
    public function create() {
        $offices = array();
        $data = array(
       'Code' => $this->input->post('Code'),
       'City' => $this->input->post('City'),
       'Addr1' => $this->input->post('Address1'),
       'Addr2' => $this->input->post('Address2'),
            'Postal' => $this->input->post('Postal'),
            'Territory' => $this->input->post('Territory'),
            
);
        // Converting $data in json
//$json_data['emp_data'] = json_encode($data);
    $data =  $this->OfficeModel->createOffice($data);
    $offices['h']=$this->OfficeModel->getOffice();
//Loading View
//$this->load->view('insert_view', $data);

// Send json encoded data to model
//$return = $this->OfficeModel->createOffice($json_data);
//if ($return == true) {
//$data['result_msg'] = 'Json data successfully inserted into database !';
//} else {
//$data['result_msg'] = 'Please configure your database correctly';
//}

// Load view to show message
$this->load->view("office1", $offices);
}
 public function search(){
          $data = array();
          $keyword    =   $this->input->post('keyword');
          $data['h']    =   $this->OfficeModel->searchModel($keyword);
           $this->load->view('office1', $data);


  }
public function enlist(){
    $this->db->select("*");
        $this->db->from('office');  
        $query = $this->db->get();

        foreach($query->result() as $row)
        {
            echo json_encode($row);
        } 
}

     
    }
    /*public function create(){
        
    }*/


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

