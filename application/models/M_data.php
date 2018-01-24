<?php

class M_data extends CI_Model{

      function show_orang(){

            $hasil=$this->db->query("SELECT * FROM orang");

            return $hasil;

      }    
       function delete($id){
        $this->db->delete('orang', array
	                 ('id' => $id));

}
 
}



