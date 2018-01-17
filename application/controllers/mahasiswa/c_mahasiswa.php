<?php
session_start();
class C_mahasiswa extends CI_Controller {

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
		$this->load->view('mahasiswa/index', $data);
	}


	public function lihatdata()
	{
		$this->load->model('model_user');
		$datas['datas'] = $this->model_user->data_dosen()->result();
		$this->load->view('mahasiswa/tampilan',$datas);
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


	public function logout(){
	// Removing session data
	$sess_array = array('username' => '',
	'password' => '');
	$this->session->unset_userdata('logged_in', $sess_array);
	$data['message_display'] = 'Successfully Logout';
	$this->load->view('login', $data);
	}

// SALAH BATAS KR MAHASISWA

	public function krs()
	{
		$ns = $this->uri->segment(4);
		$this->load->model('model_user');
		$nim = $this->session->userdata('username'); //load model
    	$data['makul'] = $this->model_user->d_krs($nim);
    	$this->load->view('mahasiswa/inputkrs',$data);
	}
	public function kirim_tugas(){
			$kd_kls = $_GET['kd_kls'];
			$kd_mk = $_GET['kd_mk'];
			$kd_tugas = $_GET['kd_tugas'];
			$nim = $this->session->userdata('username');
			$data = array(
			'kd_kls' => $kd_kls,
			'kd_mk' => $kd_mk,
			'kd_tugas' => $kd_tugas,
			'nim' => $nim
		);
		$this->load->view('mahasiswa/kirim_tugas', $data);
	}

public function upload_tgs(){
	$kd_kls = $_GET['kd_kls'];
	$kd_mk = $_GET['kd_mk'];
	$kd_tugas = $_GET['kd_tugas'];
	$nim = $this->session->userdata('username');
	$wkt_upload = date("Y-m-d H:i:s");
		$this->load->library('upload');
		$nmfile = "TUGAS_".$nim."_".$kd_mk."_".$kd_kls."_".$kd_tugas; //nama file
		$config['upload_path'] = './uploads/'; //path folder
		$config['allowed_types'] = 'pdf|docx'; //type yang dapat diakses
		$config['max_size'] = '10204'; //maksimum besar file 10 MB
		$config['file_name'] = $nmfile; //nama yang terupload nantinya
		$this->upload->initialize($config);

		if ($this->upload->do_upload('file_tugas')){
			$gbr = $this->upload->data();
			$filename = $gbr['file_name'];
	}
	$data = array(
		'username' => $nim,
		'kd_tugas' => $kd_tugas,
		'kd_mk' => $kd_mk,
		'kd_kls' => $kd_kls,
		'path' => $this->upload->data()['file_name'],
		'upload' => $wkt_upload,
		'status' => 1
	);
	$this->load->model('model_user');
	$add = $this->model_user->upload_tugas($data);
	$link = base_url('index.php/mahasiswa/c_mahasiswa/lihat_tugas');
	if($add){ //jika mengembalikan nilai true
            echo "<script>alert('Data Berhasil Di perbarui');window.location.replace('$link');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data');history.go(-1);</script>";
        }
}

	public function krslihat(){
		$this->load->model('model_user');
		$nim = $this->session->userdata('username');
		$datas['nim'] = $nim;
		$datas['datas'] = $this->model_user->detail_krsm($nim)->result();
		$this->load->view('mahasiswa/detail_krs',$datas);
	}

	public function lihat_tugas(){
		$this->load->model('model_user');
		$username = $this->session->userdata('username');
		$datas['datas'] = $this->model_user->tugas($username)->result();
		$this->load->view('mahasiswa/tugas',$datas);
	}

	public function lihat_materi(){
		$this->load->model('model_user');
		$username = $this->session->userdata('username');
		$datas['datas'] = $this->model_user->materi($username)->result();
		$query = "select distinct * from tb_mk join tb_mk_pilihan where tb_mk.kd_mk = tb_mk_pilihan.kd_mk and tb_mk.kd_kls = tb_mk_pilihan.kd_kls and tb_mk_pilihan.username = '$username'";
		$datas['mk'] = $this->db->query($query)->result();
		$this->load->view('mahasiswa/materi',$datas);
	}

	public function ubah_password(){
		$this->load->view('mahasiswa/ubah-password');
	}

	public function download_materi(){

		$this->load->helper('download');

    $this->load->helper('url');
		//$this->db->
		$id = $_GET['id'];
		$username = $this->session->userdata('username');
		$query = "select path from tb_materi WHERE tb_materi.kd_materi = '$id'";
		$hasil = $this->db->query($query);
		echo "ID File : "; echo $id;

		foreach ($hasil->result() as $key) {
			echo "Nama File : "; echo $key->path;
			$alamat = "uploads/".$key->path;
			force_download( $key->path, $alamat);
			//echo $alamat;
		}

}
	public function quis(){
				$this->load->library('pagination');
				$kd_kuis = $_GET['kd_kuis'];
				//$query = "select * from tb_user";
				$query = "select banyak_soal from tb_kuis where tb_kuis.kd_kuis = '$kd_kuis'";
				$hasil = $this->db->query($query)->result();
				foreach ($hasil as $hsl) {
					$banyak_soal = $hsl->banyak_soal;
				}
        $batas = 1; //jlh data yang ditampilkan per halaman
				$config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url('index.php/mahasiswa/c_mahasiswa/quis');   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $banyak_soal; // jlh total dpt
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
		$data['paging'] = $this->pagination->create_links();
		$data['nama_mk'] = $this->db->query("select nama_mk, tb_mk.kd_kls from tb_mk join tb_kuis where tb_mk.kd_mk=tb_kuis.kd_mk and tb_mk.kd_kls=tb_kuis.kd_kls and tb_kuis.kd_kuis='$kd_kuis'")->result();
		$data['data_soal'] = $this->db->query("select * from tb_soal_kuis join tb_kuis where tb_kuis.kd_kuis='$kd_kuis' and tb_soal_kuis.kd_kuis='$kd_kuis'")->result();
		$this->load->view('mahasiswa/quis', $data);
	}
	public function profil()
	{
		$this->load->view('mahasiswa/profil');
	}
	public function list_quis()
		{
			$this->load->model('model_user');
			$username = $this->session->userdata('username');
			$datas['data1'] = $this->model_user->lihat_kuis_mhs($username)->result();
			$this->load->view('mahasiswa/list_quis', $datas);
		}
	public function simpan_kuis()
	{
		$kd_kuis = $_GET['kd_kuis'];
		$waktu_selesai = date("Y-m-d H:i:s");
		$username = $this->session->userdata('username');
		$data = $this->db->query("select banyak_soal from tb_kuis where tb_kuis.kd_kuis='$kd_kuis'")->result();
		foreach ($data as $key) {
			$jml_soal= $key->banyak_soal;
		}
		for ($i=1; $i <= $jml_soal ; $i++) {
			$jwb = $this->input->post('pilihan'.$i);
			$data = array(
				'kd_kuis' => $kd_kuis,
				'username' => $username,
				'no_soal' => $i,
				'jwb' => $jwb,
				'waktu_selesai' => $waktu_selesai
			);
			$hasil = $this->db->insert('tb_ikut_kuis', $data);
		}
		if($hasil){
			 $link = base_url('index.php/mahasiswa/c_mahasiswa/list_quis');
			 echo "<script>alert('Anda Telah Menyelesaikan Kuis Anda! data telah sukses disimpan!');window.location.replace('$link');</script>";
		 }

	}
}
?>
