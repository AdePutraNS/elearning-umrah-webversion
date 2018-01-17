<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
		{
			$this->load->model('model_forum');
			$data['data'] =  $this->model_forum->forum();
			$this->load->view('forum', $data);
		}

		public function forum()
		{
			$this->load->view('forum');
		}

		public function simpan_forum(){
			if ($this->session->userdata('username')=="") {
				redirect('auth/login');
			}
			$this->load->helper('text');
			$data = array(
				'judul' 				=> $this->input->post('judul'),
				'isi' 				=> $this->input->post('isi'),
				'pengirim' 			=> $this->session->userdata('username'),
				'waktu' 			=> $this->input->post('waktu'));
			$this->db->insert('forum',$data);
			$link = base_url('index.php');
			echo "<script>alert('Berhasil');window.location.replace('$link');</script>";
		}

	    public function register(){
			$this->load->View('register');
		}
		public function simpan_register(){
				$data = array(
					'username' 				=> $this->input->post('username'),
					'password' 				=> $this->input->post('password'),
					'email' 			=> $this->input->post('email'),
					'nama' 			=> $this->input->post('nama'),
					'level' 			=> '3',
					'tagline'		  	=> $this->input->post('tagline'),
					'alamat'			=>		$this->input->post('alamat'),
					'tempat_lahir'  	=> $this->input->post('tempat_lahir'),
					'tanggal_lahir'  	=> $this->input->post('tanggal_lahir'),
					'agama'  			=> $this->input->post('agama'),
					'goldar'  	=> $this->input->post('goldar'));
				$this->db->insert('tb_user',$data);
				$link = base_url('index.php/auth/login');
				echo "<script>alert('Berhasil Mendaftar!');window.location.replace('$link');</script>";
			}


	public function login(){
		$this->load->view('login');
	}


	public function cek_login(){
		$data = array(
		'username' => $this->input->post('username', TRUE),
		'password' => $this->input->post('password',TRUE));
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$sess_data['password'] = $sess->password;
				$sess_data['tagline'] = $sess->tagline;
				$sess_data['alamat'] = $sess->alamat;
				$sess_data['tempat_lahir'] = $sess->tempat_lahir;
				$sess_data['tanggal_lahir'] = $sess->tanggal_lahir;
				$sess_data['agama'] = $sess->agama;
				$sess_data['goldar'] = $sess->goldar;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')==1) {
				redirect('admin/c_admin');
			}
			elseif ($this->session->userdata('level')==3) {
				redirect('mahasiswa/c_mahasiswa');
			}
			elseif ($this->session->userdata('level')==2) {
				redirect('dosen/c_dosen');
			}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}

	}


	public function data()
	{
		$this->load->view('admin/data');
	}

	public function reset_pass(){
        $username = $this->session->userdata('username');
        $pass = $this->input->post('password');
        $this->load->model('model_user');
        $data = array(
            'password' => $pass
        );
        $update = $this->model_user->update($username, $data);
        if($update){
            echo "<script>alert('Sukses: Password telah diubah');history.go(-1);</script>";
        }
        else{
            echo "<script>alert('Gagal: Tidak dapat merubah password');history.go(-1);</script>";
        }
    }

	public function simpan(){
		$datas = array(
			'nama' 				=> $this->input->post('nama'),
			'tempat_lahir'  	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'  	=> $this->input->post('tanggal_lahir'),
			'username'  		=> $this->input->post('username'),
			'password'  		=> ($this->input->post('password')),
			'level'  			=> $this->input->post('level'));
			$this->db->insert('login_akademik',$datas);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";

	}


	public function edit(){
		$this->load->model('model_user');
		$ni = $this->uri->segment(3);
		$data['edit'] = $this->model_user->edit($ni)->row_array();
		$this->load->view('admin/editdata',$data);

	}


	public function edit_simpan(){
		$id = $this->input->post('id');
		$datas = array(
			'nama' 				=> $this->input->post('nama'),
			'tempat_lahir'  	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'  	=> $this->input->post('tanggal_lahir'),
			'username'  		=> $this->input->post('username'),
			'password'  		=> ($this->input->post('password')),
			'level'  			=> $this->input->post('level'));
		$this->db->where('username',$id);
		$this->db->update('login_akademik',$datas);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
		redirect('/admin/c_admin/lihatdata');
	}



	public function delete(){
		$nip = $this->uri->segment(3);
			$this->db->where('nim',$nip);
			$this->db->delete('mahasiswa');
			$this->db->where('username',$nip);
			$this->db->delete('login_akademik');
				echo "<script>alert('Data Berhasil Di Hapus');history.go(-1);</script>";
			redirect('/admin/c_admin/lihatdata');
	}


	public function edit_mhs(){
		$this->load->model('model_user');
		$ns = $this->uri->segment(3);
		$data['edit'] = $this->model_user->edit_mhs($ns)->row_array();
		$this->load->view('admin/editdatamhs',$data);
	}


	public function edit_simpan_mhs(){
		$id = $this->input->post('id');
		$datam = array(
			'nim' 				=> $this->input->post('nim'),
			'nama' 				=> $this->input->post('nama'),
			'kelamin' 			=> $this->input->post('kelamin'),
			'fakultas' 			=> $this->input->post('fakultas'),
			'jurusan' 			=> $this->input->post('jurusan'),
			'dosen_pa'		  	=> $this->input->post('dosen_pa'),
			'tempat_lahir'  	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'  	=> $this->input->post('tanggal_lahir'),
			'agama'  			=> $this->input->post('agama'),
			'golongan_darah'  	=> $this->input->post('golongan_darah'));
		$this->db->where('username',$id);
		$this->db->update('mahasiswa',$datam);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
		redirect('/admin/c_admin/lihatdata');
	}



	public function deletemhs(){
		$nips = $this->uri->segment(3);
			$this->db->where('nim',$nips);
			$this->db->delete('mahasiswa');
			$this->db->where('username',$nips);
			$this->db->delete('login_akademik');
				echo "<script>alert('Data Berhasil Di Hapus');history.go(-1);</script>";
			redirect('/admin/c_admin/lht_mhs');
	}

//BATAS INPUT DATA MAHASISWA



	public function edit_krs(){
		$id = $this->input->post('id_jadwal');

		$datakrs = array(
			'nama_makul' 		=> $this->input->post('nama_makul'),
			'makul_id'  		=> $this->input->post('tempat_lahir'),
			'sks'  				=> $this->input->post('sks'),
			'semester'  		=> $this->input->post('semester'),
			'kelompok_makul'  	=> $this->input->post('kelompok_makul'),
			'id_syarat'  		=> $this->input->post('id_syarat'));
		$this->db->where('username',$id);
		$this->db->update('mahasiswa',$datam);
			echo "<script>alert('Data Berhasil Di perbarui');history.go(-1);</script>";
		redirect('/admin/c_admin/inputkrs');
	}



	public function data_krs(){
		$this->load->model('model_user');
		$nim = $this->session->userdata('username');
		$isi['makul'] = $this->model_user->input_krsa($nim);
		$isi['data'] = $this->model_user->detail_krsm_baru($nim)->result();
		$isi['makuls'] = $this->model_user->d_krs($nim);
		$this->load->view('mahasiswa/lihatkrs',$isi);

	}


	public function datars(){
		$this->load->model('model_user');
		$nim = $this->session->userdata('username');
		$isi['makuls'] = $this->model_user->d_krs($nim);
		$isi['data'] = $this->model_user->detail_krsm_baru($nim)->result();
		$this->load->view('mahasiswa/lihatkrs',$isi);

	}


	public function deletekrs(){
		$id = $this->input->post('id_jadwal');
		$kd_mk = $this->uri->segment(3);
		$nim = $this->session->userdata('username');
			$array = array('username' => $nim, 'kd_mk' => $kd_mk);
			$this->db->where($array);
			$this->db->delete('tb_mk_pilihan');
			redirect('auth/datars');
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
