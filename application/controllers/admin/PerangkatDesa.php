<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerangkatDesa extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Perangkat Desa';
		$data['perangkat'] = $this->DataModel->getData('perangkat')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/perangkat_desa', $data);
		$this->load->view('template_admin/footer');
	} 

	public function add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'pendidikan' => $this->input->post('pendidikan'),
			'keterangan'	=> $this->input->post('keterangan')
		);

		$this->db->insert('perangkat', $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data berhasil ditambahkan!.
              </div>');
		redirect('admin/perangkatDesa');
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['title'] = 'Form Update Perangkat Desa';
		$data['perangkat'] = $this->DataModel->getWhere('perangkat', $where)->row_array();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/edit_perangkat', $data);
		$this->load->view('template_admin/footer');

	}

	public function update_aksi()
	{
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'pendidikan' => $this->input->post('pendidikan'),
			'keterangan' =>  $this->input->post('keterangan'),
		);

		$where = array('id' => $id);

		$this->DataModel->update_data('perangkat', $data, $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Success!</h4>
                Data berhasil diupdate!.
              </div>');
		redirect('admin/perangkatDesa');
	}

	public function delete($id)
	{
		$where = array('id' => $id);

		$this->db->delete('perangkat', $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Delete!</h4>
                Data berhasil dihapus!.
              </div>');
		redirect('admin/perangkatDesa');
	}



}