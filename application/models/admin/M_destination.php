<?php 

	class M_destination extends CI_Model{	
   
        // destination
        function display_des($id){
            $this->db->select('*')
                     ->from('destination')
                     ->where('des_id', $id);
            $query = $this->db->get();
            return $query->result();
        }

        function edit($data){
            $this->db->update('destination', $data, array('des_id' => $data['des_id']));
        }

        function delete($id){
            $this->db->delete('destination', array('des_id' => $id));
        }

        function add($data){
            $this->db->insert('destination', $data);
        }
	}