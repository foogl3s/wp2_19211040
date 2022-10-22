<?php
class Matakuliah extends CI_Controller
{
	public function index()
	{
		
		$this->load->view('view-form');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
		'required' => 'Nama Siswa Harus diisi', 'min_lenght' => 'Nama terlalu pendek' ]);
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
		'required' => 'NIS Harus diisi', 'min_lenght' => 'NIS anda Salah' ]);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
		'required' => 'Kelas Harus diisi', 'min_lenght' => 'Kelas terlalu pendek' ]);
		$this->form_validation->set_rules('tglahir', 'Tanggal Lahir', 'required|min_length[3]', [
		'required' => 'Tanggal Lahir Harus diisi', 'min_lenght' => 'Isi Tanggal Lahir anda dengan Benar' ]);
		$this->form_validation->set_rules('tplahir', 'Tempat Lahir', 'required|min_length[3]', [
		'required' => 'Tempat Lahir Harus diisi', 'min_lenght' => 'Isi Tempat lahir anda dengan Benar' ]);
		$this->form_validation->set_rules('alamat', ' Alamat', 'required|min_length[3]', [
		'required' => 'Alamat Harus diisi', 'min_lenght' => 'Isi Alamat anda dengan Benar' ]);
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|min_length[3]', [
		'required' => 'Jenis Kelamin Harus dipilih', 'min_lenght' => 'Pilih jenis kelamin anda' ]);
		$this->form_validation->set_rules('agama', 'Agama', 'required|min_length[3]', [
		'required' => 'Agama Harus diisi', 'min_lenght' => 'Pilih agama anda' ]);
 
	if ($this->form_validation->run() != true) {
		$this->load->view('view-form');
	} else {
		$data = [
			'nama' => $this->input->post('nama'),
			'nis' => $this->input->post('nis'),
			'kelas' => $this->input->post('kelas'),
			'tglahir' => $this->input->post('tglahir'),
			'tplahir' => $this->input->post('tplahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama')
		];
		$this->load->view('view-data-matakuliah', $data);
	}
	}
}