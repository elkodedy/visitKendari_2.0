<?php 

	class M_guide extends CI_Model{	
   
        // destination
        function display_gui($id){
            $this->db->select('*')
                     ->from('guide')
                     ->where('guide_id', $id);
            $query = $this->db->get();
            return $query->result();
        }
        function edit($data){
            $this->db->update('guide', $data, array('guide_id' => $data['guide_id']));
        }

        function delete($id){
            $this->db->delete('guide', array('guide_id' => $id));
        }

        function add($data){
            $this->db->insert('guide', $data);
        }
	}