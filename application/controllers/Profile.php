<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Profile extends MY_Controller
{
	public function index()
	{

		$this->data['profile'] = $this->db->get('tbl_perusahaan')->row();
		$this->data['visi'] = $this->db->get_where('tbl_visi_misi',array('id' => 1))->row();
		$this->data['misi'] = $this->db->get_where('tbl_visi_misi',array('id' => 2))->row();

		$this->web = 'content/v_profile';
		$this->layout();
	}
}