<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prayer extends CI_Controller {

	public function index()
	{
		$this->load->view('prayer');
	}
}