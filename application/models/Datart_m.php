<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datart_m extends CI_Model
{
    private $_table = "rt";

    public $id_rt;
    public $no_rt;
    public $no_rw;
    public $kelurahan;
    public $kecamatan;
    public $kota;
    public $provinsi;

    public function rules()
    {
        return [
            ['field' => 'no_rt',
            'label' => 'No_rt',
            'rules' => 'required'],

            ['field' => 'no_rw',
            'label' => 'No_rw',
            'rules' => 'required'],

            ['field' => 'kelurahan',
            'label' => 'Kelurahan',
            'rules' => 'required'],

            ['field' => 'kecamatan',
            'label' => 'Kecamatan',
            'rules' => 'required'],

            ['field' => 'kota',
            'label' => 'Kota',
            'rules' => 'required'],

            ['field' => 'provinsi',
            'label' => 'Provinsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_rt" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_rt = uniqid();
        $this->no_rt = $post["no_rt"];
        $this->no_rw = $post["no_rw"];
        $this->kelurahan = $post["kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kota = $post["kota"];
        $this->provinsi = $post["provinsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_rt = $post["id"];
        $this->no_rt = $post["no_rt"];
        $this->no_rw = $post["no_rw"];
        $this->kelurahan = $post["kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kota = $post["kota"];
        $this->provinsi = $post["provinsi"];
        return $this->db->update($this->_table, array("id_rt" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_rt" => $id ));
    }
}