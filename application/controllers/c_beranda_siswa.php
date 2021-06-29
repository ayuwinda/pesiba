<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_siswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		 public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('triyani');
    }
	public function index()
	{
$data['siswa'] = $this->triyani->ambildata()->result();
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('tampil_data_siswa',$data);
		$this->load->view('template_siswa/footer');
	}

	public function hapus($nisn){
        $where = array ('nisn'=> $nisn);
        $this->triyani->hapus_data($where,'tbl_siswa');
        redirect('C_beranda_siswa/index');
    }
public function tambah_data(){
		$this->load->view('template_siswa/header');
		$this->load->view('template_siswa/sidebar');
		$this->load->view('input_data');
		$this->load->view('template_siswa/footer');
	}

           	 public function fungsitambah(){
            $nama = $this->input->post('nisn');
            $nama = $this->input->post('nama');
            $jenis_kelamin = $this->input ->post('jenis_kelamin');
           	$asal_sekolah = $this->input->post('asal_sekolah');
               $n_matematika = $this->input->post('n_matematika');
               $n_inggris = $this->input->post('n_inggris');


        $data = array(
            'nisn'=>$nisn,
            'nama'=>$nama,
            'jenis_kelamin'=>$jenis_kelamin,
            'asal_sekolah'=>$asal_sekolah,
            'n_matematika'=>$n_matematika,
            'n_inggris'=>$n_inggris,
            

            
        );
        $this->triyani->input($data,'tbl_siswa');
        redirect('C_beranda_siswa/index');
    }

    public function edit($nisn){
        $where = array('nisn'=>$nisn);
        $data['siswa']=$this->triyani->edit_data($where,'tbl_siswa')->result();
        $this->load->view('template_siswa/header');
        $this->load->view('template_siswa/sidebar');
        $this->load->view('Edit',$data);
        $this->load->view('template_siswa/footer');
    }
        public function update_data(){
            $nisn =$this ->input->post('nisn');
            $nama = $this->input->post('nama');
            $jenis_kelamin = $this ->input ->post ('jenis_kelamin');
           	$asal_sekolah = $this->input->post('asal_sekolah');
               $n_matematika = $this->input->post('n_matematika');
               $n_inggris = $this->input->post('n_inggris');
             

           	 $data = array(
            'nisn'=>$nisn,
            'nama'=>$nama,
            'jenis_kelamin'=>$jenis_kelamin,
            'asal_sekolah'=>$asal_sekolah,
            'n_matematika'=>$n_matematika,
            'n_inggris'=>$n_inggris,
            

        );
        $where = array(
            'nisn'=>$nisn
        );
           

       
        $this->triyani->update_data($where,$data,'tbl_siswa');
        redirect('C_beranda_siswa/index');
}
        
        public function check(){

            $this->load->view('check');
      
         }
 public function tampil_check(){
        $nisn = $this->input->post('nisn');
        $where = array('nisn'=>$nisn);
        $data['siswa']=$this->triyani->edit_data($where,'tbl_siswa')->result();
        $this->load->view('tampil_nisn',$data);
    }
   }