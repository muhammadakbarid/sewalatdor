<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class View_detail_sewa_model extends CI_Model
{

    public $table = 'view_detail_sewa';
    public $id = 'id_sewa';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where('id_sewa', $id);
        return $this->db->get($this->table)->result();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        // $this->db->like('', $q);
        $this->db->or_like('nama_barang', $q);
        $this->db->or_like('harga_sewa', $q);
        $this->db->or_like('jumlah_barang', $q);
        $this->db->or_like('total_harga_sewa', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        // $this->db->like('', $q);
        $this->db->or_like('nama_barang', $q);
        $this->db->or_like('harga_sewa', $q);
        $this->db->or_like('jumlah_barang', $q);
        $this->db->or_like('total_harga_sewa', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    // delete bulkdata
    function deletebulk()
    {
        $data = $this->input->post('msg_', TRUE);
        $arr_id = explode(",", $data);
        $this->db->where_in($this->id, $arr_id);
        return $this->db->delete($this->table);
    }
}

/* End of file View_detail_sewa_model.php */
/* Location: ./application/models/View_detail_sewa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-01-30 16:45:45 */
/* http://harviacode.com */