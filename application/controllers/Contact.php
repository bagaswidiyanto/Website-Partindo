<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Contact extends MY_Controller
{
	public function index()
	{

		$this->web = 'content/v_contact';
		$this->layout();
	}
}