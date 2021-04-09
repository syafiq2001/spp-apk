<?php
class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Transaksi');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Transaksi";
        $data['transaksi'] = $this->M_Transaksi->data_transaksi();
        $this->template->load_admin('index','transaksi',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data transaksi";
        $data['subtitle'] = "Tambah Data transaksi";
        $this->template->load_admin('index','transaksi_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Transaksi->simpan();
        redirect('transaksi');
    }

    public function edit(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data transaksi";
        $sata['subtitle'] = "Edit Data transaksi";

        $id = $this->uri->segment(3);
        $data['transaksi'] = $this->M_Transaksi->data_spp_by_id($id);
        $this->template->load_admin('index','transaksi_edit',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Transaksi->update();
        redirect('transaksi');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Transaksi->hapus_data_Transaksi($id);
        redirect('transaksi');
    }
}
?>