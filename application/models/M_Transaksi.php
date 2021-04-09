<?php 
class M_Transaksi extends CI_Model {
    function data_transaksi() { 
        $query = $this->db->query("select * from transaksi"); 
        return $query;
    }

    function simpan(){
    	$data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
    		     'id_petugas'=> ($this->input->post('id_petugas')),
                 'nisn'=> ($this->input->post('nisn')),
                 'tgl_bayar'=>($this->input->post('tgl_bayar')),
                 'bulan_bayar'=>($this->input->post('bulan_bayar')),
                 'tahun_bayar'=>($this->input->post('tahun_bayar')),
                 'id_spp'=>($this->input->post('id_spp')),
    		     'jumlah_bayar' => $this->input->post('jumlah_bayar'));
    	$insert = $this->db->insert('transaksi',$data);
    }
     function data_spp_by_id($id){
        $query = $this->db->query("delete from spp where id_spp = '$id'");
        return $query;
    }

    function update(){
        $where = array('id_transaksi'=> $this->input->post('id_transaksi'));
        $data1 = array('tgl_bayar'=> md5($this->input->post('tgl_bayar')),
        'bulan_bayar' => $this->input->post('bulan_bayar'),
        'jumlah_bayar' => $this->input->post('jumlah_bayar'));

        $data2 = array('tgl_bayar'=> $this->input->post('tgl_bayar'),
        'jumlah_bayar' => $this->input->post('jumlah_bayar'));

        if (empty($this->input->post('tgl_bayar'))){
            $this->db->where($where);
            $query = $this->db->update('transaksi',$data2);
        }else{
            $this->db->where($where);
            $query = $this->db->update('transaksi',$data1);
        }

        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data transaksi Berhasil Diperbaharui');
        }
    }

    function hapus_data_transaksi($id){
        $query = $this->db->query("delete from spp where id_transaksi = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data transaksi Berhasil Dihapus');
        }else{
            $this->session->set_flashdata('gagalsimpan','Data transaksi Gagal Dihapus');
        }
    }
}
?>
            
}            