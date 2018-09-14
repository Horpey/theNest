<?php 
    class ContactUs extends CI_Model{

        public function insert_data($data){
            
            return $this->db->insert('contactUs', $data);
        }

    }
?>