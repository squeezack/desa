<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		// $this->load->view('dashboard', $data);	
		$this->load->view('user/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer', $data);
	}
	
	public function sejarah()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/sejarah', $data);
		$this->load->view('user/footer', $data);
	}
	public function visi()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/visi', $data);
		$this->load->view('user/footer', $data);
	}
	public function struktur()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/struktur', $data);
		$this->load->view('user/footer', $data);
	}
	public function fasilitas()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/fasilitas', $data);
		$this->load->view('user/footer', $data);
	}
	public function produk()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/produk', $data);
		$this->load->view('user/footer', $data);
	}
	public function informasi()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/informasi', $data);
		$this->load->view('user/footer', $data);
	}
	public function kontak()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/kontak', $data);
		$this->load->view('user/footer', $data);
	}
	public function surat()
	{
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['kegiatan'] = $this->db->get('kegiatan')->result();
		$data['fasilitas'] = $this->db->get('fasilitas')->result();
		if($this->session->userdata('email')){
			$data['surat'] = $this->Surat_model->get_by_sender($this->session->userdata('id'));
		}
		$this->load->view('user/header', $data);
		$this->load->view('user/surat', $data);
		$this->load->view('user/footer', $data);
	}
	
	public function message()
	{
		$nama = htmlspecialchars($this->input->post('nama'));
		$email = htmlspecialchars($this->input->post('email'));
		$no_tlp = htmlspecialchars($this->input->post('no_telepon'));
		$pesan = htmlspecialchars($this->input->post('pesan'));

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'no_telepon' => $no_tlp,
			'pesan' => $pesan
		);

		$this->db->insert('message', $data);

		redirect('user/kontak');
	}

}