<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Danhmuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{

	}
	public function add()
	{
		$this->load->view('danhmuc/danhmuc');
	}
}

?>
