<?php

class OfficeModel extends CI_Model{

   // private $db;

    /*public function index()       
{
}*/
public function createOffice($json_data){
   
$this->db->insert('off_info',$json_data);

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

