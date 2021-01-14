<?php 

	class M_home extends CI_Model{	
   
        // destination
        function display_destination(){
            $this->db->select('*')
                     ->from('destination')
                     ->limit(6);
            $query = $this->db->get();
            return $query->result();
        }
        function display_destination_all(){
            $this->db->select('*')
                     ->from('destination');
            $query = $this->db->get();
            return $query->result();
        }
        function display_destination_1(){
            $this->db->select('*')
                     ->from('destination')
                     ->limit(1);
            $query = $this->db->get();
            return $query->result();
        }

        // accommodation
        function display_accommodation(){
            $this->db->select('*')
                     ->from('accommodation')
                     ->limit(3);
            $query = $this->db->get();
            return $query->result();
        }
        function display_accommodation_all(){
            $this->db->select('*')
                     ->from('accommodation');
            $query = $this->db->get();
            return $query->result();
        }
        function display_accommodation_1(){
            $this->db->select('*')
                     ->from('accommodation')
                     ->limit(1);
            $query = $this->db->get();
            return $query->result();
        }

        // guide
        function display_guide(){
            $this->db->select('*')
                     ->from('guide');
            $query = $this->db->get();
            return $query->result();
        }
        function display_guide_all(){
            $this->db->select('*')
                     ->from('guide');
            $query = $this->db->get();
            return $query->result();
        }
        function display_guide_1(){
            $this->db->select('*')
                     ->from('guide')
                     ->limit(1);
            $query = $this->db->get();
            return $query->result();
        }
	}