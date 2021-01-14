<?php 

	class M_home extends CI_Model{	
   
        function count_des(){
            $this->db->select('*')
                      ->from('destination');
            $query = $this->db->get();
            return $query->num_rows();
        } 
        function count_acc(){
            $this->db->select('*')
                      ->from('accommodation');
            $query = $this->db->get();
            return $query->num_rows();
        } 
        function count_gui(){
            $this->db->select('*')
                      ->from('guide');
            $query = $this->db->get();
            return $query->num_rows();
        }    

	}