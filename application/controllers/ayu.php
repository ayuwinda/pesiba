<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ayu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('triyani');
    }

    public function index()

    {
		$data['mahasiswa'] = $this->triyani->ambildata()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');	
		$this->load->view('informasi_data_siswa',$data);	
		$this->load->view('template_admin/footer');
    }

    public function hapus($Id){
        $where = array ('Id'=> $Id);
        $this->triyani->hapus_data($where,'tbl_siswa');
        redirect('ayu/index');
    }


        public function fungsitambah(){
        
            $Nama = $this->input->post('Nama');
            $Npm = $this ->input ->post ('Npm');
           

        $data = array(
            
            'Nama'=>$Nama,
            'Npm'=>$Npm,
            
        );
        $this->triyani->input($data,'tbl_siswa');
        redirect('ayu/index');
    }

    public function edit($Id){
        $where = array('Id'=>$Id);
        $data['mahasiswa']=$this->triyani->edit_data($where,'tbl_siswa')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('Edit',$data);
        $this->load->view('template_admin/footer');
    }
        public function update(){
            $Id =$this ->input->post('Id');
            $Nama = $this->input->post('Nama');
            $Npm = $this ->input ->post ('Npm');
           

        $data = array(
            
            'Nama'=>$Nama,
            'Npm'=>$Npm,
            

        );
        $where = array(
            'Id'=>$Id
        );
        $this->triyani->update_data($where,$data,'tbl_siswa');
        redirect('ayu/index');
    }
    public function pdf(){

        $this->load->library('dompdf_gen');
        $data['mahasiswa']=$this->triyani->ambildata('tbl_siswa')->result();
        $this->dompdf_gen->generate('tampilan_pdf', $data, 'laporan-mahasiswa', 'A4', 'landscape');
        }

}