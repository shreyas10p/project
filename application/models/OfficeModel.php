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

    if ($this->db->affected_rows() > 0) {
return true;
} else {
return false;
}
}



/*public function getOffices()
    {
        
    }*/
    
}

