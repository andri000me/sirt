<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Data_rt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datart_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["rt"] = $this->Datart_m->getAll();
        $this->load->view("admin/data_master/datart",$data);
    }

    public function add()
    {
        $rt = $this->Datart_m;
        $validation = $this->form_validation;
        $validation->set_rules($rt->rules());

        if ($validation->run()) {
            $rt->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/data_master/tambahdatart");
    }

    public function edit($id = null)
    {
        if(!isset($id)) redirect('admin/data_master/Data_rt');

        $rt = $this->Datart_m;
        $validation = $this->form_validation;
        $validation->set_rules($rt->rules());

        if ($validation->run()) {
            $rt->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data["rt"] = $rt->getById($id);
        if (!$data["rt"]) show_404();
        
        $this->load->view("admin/data_master/edit_rt", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if($this->Datart_m->delete($id)){
            redirect(site_url('admin/data_master/Data_rt'));
        }
    }
}