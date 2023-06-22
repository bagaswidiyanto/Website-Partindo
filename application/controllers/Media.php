<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Media extends MY_Controller
{
	public function index()
	{


		$this->data["video"] = $this->db->get('tbl_link_video')->row();
		$this->data["short"] = $this->db->get('tbl_link_short')->result();

		$this->data["tab_bisnis"] = $this->db->get('tbl_bisnis')->result();
		$this->db->select('a.*, b.title as titleBisnis, c.title as titleDivisi');
		$this->db->from('tbl_gallery_portofolio a');
		$this->db->join('tbl_bisnis b', 'a.id_bisnis=b.id', 'left');
		$this->db->join('tbl_master_division c', 'a.id_divisi=c.id', 'left');
		$this->db->order_by('a.created_date', 'DESC');
		$dataPort = $this->db->get()->result();
		$this->data['daataPort'] = $dataPort;

		$this->web = 'content/v_media';
		$this->layout();
	}
}