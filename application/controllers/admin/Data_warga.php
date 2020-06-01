<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Data_warga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datawarga_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["warga"] = $this->Datawarga_m->getAll();
        $this->load->view("admin/data_master/datawarga",$data);
    }

    public function add()
    {
        $warga = $this->Datawarga_m;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules());

        if ($validation->run()) {
            $warga->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/data_master/tambahdatawarga");
    }

    public function edit($id = null)
    {
        if(!isset($id)) redirect('admin/data_master/Data_warga');

        $warga = $this->Datawarga_m;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules());

        if ($validation->run()) {
            $warga->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["warga"] = $warga->getById($id);
        if (!$data["warga"]) show_404();
        
        $this->load->view("admin/data_master/edit_warga", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->Datawarga_m->delete($id)){
            redirect(site_url('admin/data_master/Data_warga'));
        }
    }
}