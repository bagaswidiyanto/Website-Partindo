<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();

		$this->data['our_bisnis'] = $this->db->get('tbl_bisnis')->result();
		$this->data['divisi'] = $this->db->get('tbl_master_division')->result();

		$this->data['profile'] = $this->db->get('tbl_perusahaan')->row();


		$this->db->select('*');
		$this->db->from('tbl_posts');
		$this->db->order_by('created_date', 'desc');
		$this->db->limit(5);
		$news = $this->db->get();
		$this->data['news'] = $news->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}
