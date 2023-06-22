<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Part_division extends MY_Controller
{
	public function index()
	{

		$this->data['part'] = $this->db->get_where('tbl_bisnis', array('id' => 1))->row();
		$this->data['new_parts'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['part']->id, 'id' => 1))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['new_parts']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$part_gallery = $this->db->get();
		$this->data['part_gallery'] = $part_gallery->result();
		$this->data['kondisiPart'] = $part_gallery->row();


		$this->data['good_used'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['part']->id, 'id' => 2))->row();
		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['good_used']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$good_used_gallery = $this->db->get();
		$this->data['good_used_gallery'] = $good_used_gallery->result();
		$this->data['kondisiGU'] = $good_used_gallery->row();

		$this->web = 'content/v_part_division';
		$this->layout();
	}
}
