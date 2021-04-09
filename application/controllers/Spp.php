<?php
class Spp extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Spp');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Spp";
        $data['spp'] = $this->M_Spp->data_spp();
        $this->template->load_admin('index','spp',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Spp";
        $data['subtitle'] = "Tambah Data Spp";
        $this->template->load_admin('index','spp_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Spp->simpan();
        redirect('spp');
    }

    public function Edit(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data SPP";
        $sata['subtitle'] = "Edit Data SPP";

        $id = $this->uri->segment(3);
        $data['spp'] = $this->M_Spp->data_spp_by_id($id);
        $this->template->load_admin('index','spp_edit',$data);
    }

    public function update(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Spp->update();
        redirect('spp');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Spp->hapus_data_Spp($id);
        redirect('spp');
    }
}
?>