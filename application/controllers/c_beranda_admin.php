<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda_admin extends CI_Controller {

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
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('informasi_data_siswa',$data);
		$this->load->view('template_admin/footer');
	}
	 public function edit($nisn){
        $where = array('nisn'=>$nisn);
        $data['siswa']=$this->triyani->edit_data($where,'tbl_siswa')->result();
        $this->load->view('template_siswa/header');
        $this->load->view('template_siswa/sidebar');
        $this->load->view('Edit_admin',$data);
        $this->load->view('template_siswa/footer');
    }
        public function update_data(){
            $nisn =$this ->input->post('nisn');
            $status = $this->input->post('status');

             

           	 $data = array(
            'status'=>$status,

            

        );
        $where = array(
            'id'=>$nisn
        );
           

       
        $this->triyani->update_data($where,$data,'tbl_siswa');
        redirect('C_beranda_admin/index');
}
}
