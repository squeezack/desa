<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Pesan Masuk';
		$data['pesan'] = $this->DataModel->getData('message')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/pesan', $data);
		$this->load->view('template_admin/footer');
	} 

	public function detailPesan($id)
	{
		$data['title'] = 'Detail Pesan';

		$where = array('id' => $id);
		$data['pesan'] = $this->db->get_where('message', $where)->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/detailPesan', $data);
		$this->load->view('template_admin/footer');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->db->delete('message', $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Berhasil dihapus!.
              </div>');
		redirect('admin/pesan');
	}


}
