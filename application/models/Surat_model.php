<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Surat_model extends CI_Model 
{
    public function get_all()
    {
        $query = $this->db->get('surat');
        return $query->result();
    }
    
    public function get_specific($id){
        $query = $this->db->get_where('surat', array('id' => $id));
        return $query->row();
    }
    
    public function get_sender($id){
        $query = $this->db->get_where('admin', array('id' => $id));
        return $query->row();
    }

    public function get_by_sender($id){
        $query = $this->db->get_where('surat', array('pengirim' => $id));
        return $query->result();
    }

    public function get_everything(){
        $this->db->select('surat.id, surat.judul, surat.keterangan, surat.status, admin.username, admin.no_telepon');
        $this->db->from('surat');
        $this->db->join('admin', 'admin.id = surat.pengirim');
        $query = $this->db->get();
        return $query->result();
    }
}


/* End of file Surat_model.php and path \application\models\Surat_model.php */
