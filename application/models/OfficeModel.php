<?php

class OfficeModel extends CI_Model{

   // private $db;

    /*public function index()       
{
}*/
public function createOffice($data){
   
$this->db->insert('office', $data);

    if ($this->db->affected_rows() > 0) {
return true;
} else {
return false;
}
}
public function getOffice(){
    
}


/*public function getOffices()
    {
        
    }*/
    
}

