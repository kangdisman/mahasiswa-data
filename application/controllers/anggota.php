<?php 

class Anggota extends CI_Controller {

	private $limit = 3;

	function __construct() {
		parent::__construct();

		$this->load->model('anggota_model','',TRUE);
		$this->load->library(array('upload', 'table', 'form_validation'));
		$this->load->helper(array('form', 'url'));
	}

	function index() {
		$data['title'] = 'Selamat datang';
		$data['judul'] = 'Selamat datang';
		$data['content'] = 'profil';
		$this->load->view('template', $data);
	}

	function get_all($offset=0, $order_colum='id', $order_type='desc') {
		if(empty($offset)) $offset = 0;
		if(empty($order_colum)) $order_colum = 'id';
		if(empty($order_type)) $order_type = 'desc';

		$data['anggota'] = $this->anggota_model->get_paged_list($this->limit, $offset, $order_colum, $order_type)->result();
		$this->load->library('pagination');
		$config['base_url'] = site_url('anggota/get_all/');
		$config['total_rows'] = $this->anggota_model->count();

		$config['per_page'] = $this->limit;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$data['title'] = 'Total anggota';
		$data['judul'] = 'Total anggota';
		$data['content'] = 'anggota/index';
		$this->load->view('template', $data);
	}

	function add() {
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '2000';
		$config['max_height'] = '1024';

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			$foto="";
		} else {
			$foto=$this->upload->file_name;
		}

		$this->form_validation->set_rules('nama', 'Nama Anggota', 'required');
		if ($this->form_validation->run() == TRUE) {
			$data = array('id' => $this->input->post('id'),
				'foto' => $foto,
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'kampus' => $this->input->post('kampus'),
				'prodi' => $this->input->post('prodi'),
				'tahun' => $this->input->post('tahun')  
				);
			$this->anggota_model->add($data);
			redirect('anggota/get_all');
		} else {
			$data['title'] = 'Tambah data anggota';
			$data['judul'] = 'Tambah anggota';
			$data['content'] = 'anggota/add';
			$this->load->view('template', $data);
		}
	}

	function edit($id) {
		$data['anggota'] = $this->anggota_model->get_by_id($id)->row_array();
		$data['title'] = 'Edit data anggota';
		$data['judul'] = 'Edit data anggota';
		$data['content'] = 'anggota/edit';
		$this->load->view('template', $data);
	}
 
	function update($id) {
		$id = $this->input->post('id');

		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '2000';
		$config['max_height'] = '1024';

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			$foto="";
		} else {
			$foto=$this->upload->file_name;
		}

		$data = array('foto' => $foto, 
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'kampus' => $this->input->post('kampus'),
			'prodi' => $this->input->post('prodi'),
			'tahun' => $this->input->post('tahun')
			);
		foreach ($anggota as $key => $row) :
			unlink("images/"/$row->foto);
		endforeach;
		$this->anggota_model->update($id, $data);
		redirect('anggota/get_all');
	}
 
	function hapus() {
		$id = $this->uri->segment(3);
		$anggota = $this->anggota_model->get_by_id($id)->result();
		foreach ($anggota as $key => $row) :
			unlink("images/".$row->foto);
		endforeach;
		$this->anggota_model->hapus($id);
		redirect('anggota/get_all', 'refresh');
	}

	function view($id) {
		$data['anggota'] = $this->anggota_model->get_by_id($id)->row_array();
		$data['title'] = 'Tinjau data anggota';
		$data['judul'] = 'Tinjau data anggota';
		$data['content'] = 'anggota/view';
		$this->load->view('template', $data);
	}

	function cari() {
		$data['title'] = 'Searching';
		$cari = $this->input->post('search');
		$data['anggota'] = $this->anggota_model->cari($cari);
		if ($data->num_rows() > 0) {
			$data['message'] = "";
			$data['judul'] = 'Cari data anggota';
			$data['content'] = 'anggota/cari';
			$this->load->view('template', $data);
		} else {
			$data['message'] = "<div class='alert alert-success'>Data tidak ditemukan</div>";
			$data['judul'] = 'Cari data anggota';
			$data['content'] = 'anggota/cari';
			$this->load->view('template', $data);
		}
	}

}

 ?>