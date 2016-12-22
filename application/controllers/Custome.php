<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custome extends CI_Controller {


	function __construct() {
		parent::__construct();
		
		$this->load->helper('url');
		

	}
	public function index()
	{
		$this->load->view('my_view');
	}

	public function ashish()
	{
		echo"Xenium Digital";
	}
}
