<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datawarga_m extends CI_Model
{
    private $_table = "warga";

    public $NIK;
    public $NKK;
    public $nama;
    public $tmpt_lahir;
    public $tgl_lahir;
    public $jk;
    public $alamat;
    public $rt;
    public $rw;

    public function rules()
    {
        return [
            ['field' => 'NIK',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'NKK',
            'label' => 'NKK',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'tmpt_lahir',
            'label' => 'tmpt_lahir',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'tgl_lahir',
            'rules' => 'required'],

            ['field' => 'jk',
            'label' => 'jk',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'rt',
            'label' => 'rt',
            'rules' => 'required'],

            ['field' => 'rw',
            'label' => 'rw',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["NIK" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NIK = $post["NIK"];
        $this->NKK = $post["NKK"];
        $this->nama = $post["nama"];
        $this->tmpt_lahir = $post["tmpt_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->NIK = $post["NIK"];
        $this->NKK = $post["NKK"];
        $this->nama = $post["nama"];
        $this->tmpt_lahir = $post["tmpt_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        return $this->db->update($this->_table, array("NIK" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("NIK" => $id ));
    }
}