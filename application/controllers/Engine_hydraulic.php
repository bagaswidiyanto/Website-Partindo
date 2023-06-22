<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Engine_hydraulic extends MY_Controller
{
	public function index()
	{
		$this->data['engine'] = $this->db->get_where('tbl_bisnis', array('id' => 3))->row();

		$this->data['over'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['engine']->id, 'id' => 7))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['over']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$over_gallery = $this->db->get();
		$this->data['over_gallery'] = $over_gallery->result();
		$this->data['kondisiOver'] = $over_gallery->row();

		$this->data['trouble'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['engine']->id, 'id' => 8))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['trouble']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$trouble_gallery = $this->db->get();
		$this->data['trouble_gallery'] = $trouble_gallery->result();
		$this->data['kondisiTrouble'] = $trouble_gallery->row();

		$this->data['fabrication'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['engine']->id, 'id' => 9))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['fabrication']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$fabrication_gallery = $this->db->get();
		$this->data['fabrication_gallery'] = $fabrication_gallery->result();
		$this->data['kondisiFabrication'] = $fabrication_gallery->row();

		$this->data['part_develop'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['engine']->id, 'id' => 10))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['part_develop']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(3);
		$part_develop_gallery = $this->db->get();
		$this->data['part_develop_gallery'] = $part_develop_gallery->result();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['part_develop']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$part_develop_gallery_slider = $this->db->get();
		$this->data['part_develop_gallery_slider'] = $part_develop_gallery_slider->result();
		$this->data['kondisiPD'] = $part_develop_gallery_slider->row();


		$this->web = 'content/v_engine';
		$this->layout();
	}
}
