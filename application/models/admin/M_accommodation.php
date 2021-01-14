<?php 

	class M_accommodation extends CI_Model{	
   
        // destination
        function display_acc($id){
            $this->db->select('*')
                     ->from('accommodation')
                     ->where('acc_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
        
        function edit($data){
            $this->db->update('accommodation', $data, array('acc_id' => $data['acc_id']));
        }

        function delete($id){
            $this->db->delete('accommodation', array('acc_id' => $id));
        }

        function add($data){
            $this->db->insert('accommodation', $data);
        }
	}