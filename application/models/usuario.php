<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
    
    public function gravar($dados) {
        
        $this->db->trans_start();
        
        $this->db->insert('usuarios', $dados);
        $id = $this->db->insert_id();
        
        $this->db->trans_complete();
            
        if ($this->db->trans_status() === FALSE)
        {
            return false;
        } else {
            return $id;
        }
        
    }
    
    
}
