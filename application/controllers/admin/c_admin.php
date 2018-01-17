<?php
session_start();
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$this->load->view('admin/index', $data);
	}

	public function lihatdata()
	{
		$this->load->model('model_user');
		$datas['datas'] = $this->model_user->data_dosen()->result();
		$this->load->view('admin/tampilandata',$datas);

	}

	function edit(){
		echo $this->url->segment(2);
	}

	public function logout() {
	// Removing session data
	$sess_array = array('username' => '',
	'password' => '');
	$this->session->unset_userdata('logged_in', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login', $data);
	}
	


		public function tdm(){
	$this->load->view('admin/td_mahasiswa');
	}


	public function simpan_m(){
		$datam = array(
			'nim' 					=> $this->input->post('nim'),
			'nama' 					=> $this->input->post('nama'),
			'jurusan'  				=> $this->input->post('jurusan'),
			'fakultas'		  		=> $this->input->post('fakultas'),
			'dosen_pa'  			=> $this->input->post('dosen_pa'),
			'tempat_lahir' 			=> $this->input->post('tempat_lahir'),
			'tempat_lahir' 			=> $this->input->post('tanggal_lahir'),
			'no_ktp' 				=> $this->input->post('no_ktp'),
			'alamat' 				=> $this->input->post('alamat'),
			'no_hp'		 			=> $this->input->post('no_hp'),
			'kelamin'	 			=> $this->input->post('kelamin'),
			'agama'		 			=> $this->input->post('agama'),
			'golongan_darah'		=> $this->input->post('golongan_darah'));
			

			$this->db->insert('mahasiswa',$datam);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
			redirect('/admin/c_admin/lht_mhs');
		
	}

	public function lht_mhs()
	{
		$this->load->model('model_user');
		$datam['datam'] = $this->model_user->master_mahasiswa()->result();
		$this->load->view('admin/master_mhs',$datam);

	}


	public function d_smster()
	{
		$this->load->view('admin/datasemester');

	}



}
?>