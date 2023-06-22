<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Genset_electrical extends MY_Controller
{
	public function index()
	{

		$this->data['genset'] = $this->db->get_where('tbl_bisnis', array('id' => 2))->row();

		$this->data['over'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['genset']->id, 'id' => 3))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['over']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$over_gallery = $this->db->get();
		$this->data['over_gallery'] = $over_gallery->result();
		$this->data['kO'] = $over_gallery->row();

		$this->data['trouble'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['genset']->id, 'id' => 4))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['trouble']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$trouble_gallery = $this->db->get();
		$this->data['trouble_gallery'] = $trouble_gallery->result();
		$this->data['kT'] = $trouble_gallery->row();

		$this->data['maintenance'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['genset']->id, 'id' => 5))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['maintenance']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$maintenance_gallery = $this->db->get();
		$this->data['maintenance_gallery'] = $maintenance_gallery->result();
		$this->data['kM'] = $maintenance_gallery->row();

		$this->data['panel'] = $this->db->get_where('tbl_master_division', array('id_bisnis' => $this->data['genset']->id, 'id' => 6))->row();

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['panel']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(3);
		$panel_gallery = $this->db->get()->result();
		$this->data['panel_gallery'] = $panel_gallery;

		$this->db->select('*');
		$this->db->from('tbl_gallery_portofolio');
		$this->db->where('id_divisi', $this->data['panel']->id);
		$this->db->order_by('created_date', 'DESC');
		$this->db->limit(8);
		$panel_gallery_slider = $this->db->get();
		$this->data['panel_gallery_slider'] = $panel_gallery_slider->result();
		$this->data['kP'] = $panel_gallery_slider->row();

		$this->web = 'content/v_genset';
		$this->layout();
	}
}
