<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
        public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('m_login');
    }

  function index(){
    $this->load->view('hal_login');
  }

    function login_aksi(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'username' => $username,
      'password' => $password
      );
    if($cek = $this->m_login->cek_login("admin",$where)->num_rows()){
          if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("index.php/c_beranda_admin"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }else{
    $cek = $this->m_login->cek_login("siswa",$where)->num_rows();
  if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect(base_url("index.php/c_beranda_siswa"));
 
    }else{

      echo"<script>alert('user dan password salah');</script>";
      
    }
  }

  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('C_login'));
  }
  public function register(){
    $this->load->view('buat_akun');
  }
  public function tambah_user(){      
        

            $username = $this ->input ->post ('username');
            $password = $this->input->post('password');       

        $data = array(
            
            'username'=>$username,
            'password'=>$password

        );
        $this->m_login->input($data,'siswa');
        redirect('c_login/index');
  
  }
 }