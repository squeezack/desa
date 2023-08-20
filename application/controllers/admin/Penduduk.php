<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Penduduk';
		$data['penduduk'] = $this->DataModel->getData('penduduk')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/penduduk', $data);
		$this->load->view('template_admin/footer');
	} 

	public function add()
	{
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			'jk'	=> $this->input->post('jk'),
			'status' => $this->input->post('status')
		);

		$this->db->insert('penduduk', $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data berhasil ditambahkan!.
              </div>');
		redirect('admin/penduduk');
	}

	public function update($id)
	{
		$where = array('id_penduduk' => $id);

		$data['title'] = 'Form Update Penduduk';
		$data['penduduk'] = $this->DataModel->getWhere('penduduk', $where)->row_array();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/edit_penduduk', $data);
		$this->load->view('template_admin/footer');

	}

	public function update_aksi()
	{
		$id = $this->input->post('id_penduduk');
		$data = array(
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' =>  $this->input->post('jk'),
			'status' =>  $this->input->post('status'),
		);

		$where = array('id_penduduk' => $id);

		$this->DataModel->update_data('penduduk', $data, $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Success!</h4>
                Data berhasil diupdate!.
              </div>');
		redirect('admin/penduduk');
	}

	public function delete($id)
	{
		$where = array('id_penduduk' => $id);

		$this->db->delete('penduduk', $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Delete!</h4>
                Data berhasil dihapus!.
              </div>');
		redirect('admin/penduduk');
	}



}