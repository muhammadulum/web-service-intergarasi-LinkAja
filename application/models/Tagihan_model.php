<?php

class Tagihan_model extends CI_Model

{
    public function getTagihan($unit_id, $student_id, $base_code)
    {
        
        
        $id = $this->input->get('customer_id');
         if ($id) {
            return $this->db->get_where('tagihan', ['customer_id' => $id])->result_array();
        } else {
            return $this->db->get('tagihan')->result_array();
        }
    }

    // public function getIdtagihan($id = null)
    // {
    //     if ($id === null) {
            
    //     } else {
            
    //     } 
    // }

    public function post_pay($data)
    {
        $this->db->insert('tagihan',$data);
        return $this->db->affected_rows();
    }

    // public function deleteTagihansiswa($id)
    //     {
    //         $this->db->delete('tagihan_siswa',['id_tagihan'=> $id]);
    //         return $this->db->affected_rows();
    //     }


    // public function createPembayaran($data)
    // {
    //     $this->db->insert('tagihan_siswa',$data);
    //     return $this->db->affected_rows();
    // }

    // public function updatePembayaran($data, $id)
    // {
    //     $this->db->update('tagihan_siswa',$data,['pembayaran'=>$id]);
    //     return $this->db->affected_rows();
    // }


}
