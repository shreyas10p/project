<?php

class OfficeModel extends CI_Model{

   // private $db;

    /*public function index()       
{
}*/
   function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  

    public function getOffice() {
        $query = $this->db->get('office');  
         return $query;  
       // $this->load->view('office', $result);
    }

public function createOffice($data){
   
$this->db->insert('office', $data);

    
}
public function searchModel($keyword){

  $this->db->where('Code',$keyword);
  $query  =   $this->db->get('office');
  //echo $this->db->last_query();
  return $query;
}




/*public function getOffices()
    {
        
    }*/
    
}

