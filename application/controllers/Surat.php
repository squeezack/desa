<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
    }

    public function add()
    {
        $rules = [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ],
            [
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE){
            return redirect('/');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'keterangan' => $this->input->post('keterangan'),
                'pengirim' => $this->session->userdata('id'),
                'diajukan_tgl' => date('m/d/y'),
                'status' => 'dikirim'
            ];

            $this->db->insert('surat', $data);
            return redirect('user');
        }
    }

    public function list(){
        $data = [
            'title' => 'Daftar Surat Masuk',
            'surat' => $this->Surat_model->get_everything(),
        ];
        $this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/surat', $data);
		$this->load->view('template_admin/footer');
    }

    public function update($id){
        $surat = $this->Surat_model->get_specific($id);
        $data = [
            'title' => $surat->judul,
            'surat' => $surat
        ];
        $this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar');
		$this->load->view('admin/edit_surat', $data);
		$this->load->view('template_admin/footer');
    }

    public function update_aksi(){
        $rules = [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required',
            ],
            [
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required',
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required',
            ],
        ];
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE){
            return redirect('surat/list');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'keterangan' => $this->input->post('keterangan'),
                'status' => $this->input->post('status')
            ];
            $this->DataModel->update_data('surat', $data, array('id' => $this->input->post('id')));
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Success!</h4>
                Data berhasil diupdate!.
              </div>');
		redirect('surat/list');
        }
    }

    public function delete($id){
        $this->db->delete('surat', array('id' => $id));
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-times"></i> Delete!</h4>
                Data berhasil dihapus!.
              </div>');
		redirect('surat/list');
    }
}

/* End of file Surat.php and path \application\controllers\Surat.php */
