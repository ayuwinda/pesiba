<?php

class triyani extends CI_model{
    public function ambildata(){
        return $this ->db-> get('tbl_siswa');

    }
        public function input($uji){
        $this->db->insert('tbl_siswa',$uji);
    }

    public function hapus_data($where,$uji){
        $this->db->where($where);
        $this->db->delete($uji);

    }
    public function edit_data($where,$uji){
        return $this->db->get_where($uji,$where);
    }
        public function update_data($where,$data,$uji){
        $this->db->where($where);
        $this->db->update($uji,$data);
    }



}

?>