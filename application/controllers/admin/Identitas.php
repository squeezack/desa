<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Identitas Lembaga';
		$data['identitas'] = $this->DataModel->getData('identitas')->result();
		$data['about'] = $this->DataModel->getData('about')->result();
		$data['fasilitas'] = $this->DataModel->getData('fasilitas')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/identitas', $data);
		$this->load->view('template_admin/footer');
	}

	public function editIdentitas($id)
	{
		$data['title'] = 'Edit Identitas Lembaga';
		$where = array('id' => $id);
		$data['identitas'] = $this->db->get_where('identitas', $where)->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/formEditIdentitas', $data);
		$this->load->view('template_admin/footer');
	}

	public function aksiIdentitas()
	{
		$id 		= $this->input->post('id');
		$judulweb	= htmlspecialchars($this->input->post('judul_website', true));
		$alamat		= htmlspecialchars($this->input->post('alamat', true));
		$provinsi	= htmlspecialchars($this->input->post('provinsi', true));
		$email		= htmlspecialchars($this->input->post('email', true));
		$notlp		= htmlspecialchars($this->input->post('no_telepon', true));

		$data = array(
			'judul_website'  => $judulweb,
			'alamat'	=> $alamat,
			'provinsi'	=> $provinsi,
			'email'		=> $email,
			'no_telepon'=> $notlp
		);

		$where = array(
			'id' => $id
		);

		$this->DataModel->update_data('identitas', $data, $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Identitas berhasil diperbaharui!.
              </div>');
		redirect('admin/identitas');
	}


	public function editTentang($id)
	{
		$data['title'] = 'Edit Tentang Lembaga';
		$where = array('id' => $id);
		$data['about'] = $this->db->get_where('about')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/formEditTentang', $data);
		$this->load->view('template_admin/footer');
	}

	public function aksiTentang()
	{
		$id 		= $this->input->post('id');
		$about_us	= htmlspecialchars($this->input->post('about_us', true));
		$visi		= htmlspecialchars($this->input->post('visi', true));
		$misi		= htmlspecialchars($this->input->post('misi', true));

		$data = array(
			'about_us'  => $about_us,
			'visi'		=> $visi,
			'misi'		=> $misi
		);

		$where = array(
			'id' => $id
		);

		$this->DataModel->update_data('about', $data, $where);
		$this->session->set_flashdata('pesan1','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data berhasil diperbaharui!..
              </div>');
		redirect('admin/identitas');
	}

	public function editFasilitas($id)
	{
		$data['title'] = 'Edit Fasilitas';
		$where = array('id_fasilitas' => $id);
		$data['fasilitas'] = $this->db->get_where('fasilitas', $where)->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/formEditFasilitas', $data);
		$this->load->view('template_admin/footer');
	}

	public function aksiFasilitas()
	{
		$id 		= $this->input->post('id_fasilitas');
		$judul	= htmlspecialchars($this->input->post('judul', true));
		$isi		= htmlspecialchars($this->input->post('isi', true));
		$photo		= $_FILES['gambar']['name'];
			if($photo){
				$config ['upload_path']		= './assets/user/img/portfolio';
				$config ['allowed_types']	= 'jpeg|jpg|png|gif|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$photo = $this->upload->data('file_name');
					$this->db->set('gambar', $photo);
				}else{
					echo "Gagal upload";
				}
			}

		$data = array(
			'judul'  => $judul,
			'isi'		=> $isi,
			'gambar' => $photo,
		);
		
		$where = array(
			'id_fasilitas' => $id
		);

		$this->DataModel->update_data('fasilitas', $data, $where);
		$this->session->set_flashdata('pesan1','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data berhasil diperbaharui!..
              </div>');
		redirect('admin/identitas');
	}
	public function tambahFasilitas(){
		$photo		= $_FILES['gambar']['name'];
			if($photo){
				$config ['upload_path']		= './assets/user/img/portfolio';
				$config ['allowed_types']	= 'jpeg|jpg|png|gif|tiff';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')){
					$photo = $this->upload->data('file_name');
					$this->db->set('gambar', $photo);
				}else{
					echo "Gagal upload";
				}
			}

		$data = array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'gambar' => $photo
		);
		$this->db->insert('fasilitas', $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data berhasil ditambahkan!.
              </div>');
		redirect('admin/identitas');
	}
	public function deleteFasilitas($id){
		$this->db->delete('fasilitas', array('id_fasilitas' => $id));
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Delete!</h4>
                Data berhasil dihapus!.
              </div>');
		redirect('admin/identitas');
	}
}