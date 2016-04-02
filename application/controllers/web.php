<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$current_page_uri = $_SERVER['REQUEST_URI'];
		$part_url = explode("/", $current_page_uri);
		$page_name = end($part_url);
		
		$data['current_page_uri'] = $current_page_uri;
		$data['parse_url'] = $part_url;
		$data['page_name'] = $page_name;
		/*$this->load->view('templates/main/index', $data);*/

		$this->load->view('templates/web/index', $data);
		
	}

	public function sale()
	{
		$this->load->view('templates/web/sale');
		
	}

	public function handbags()
	{
		$this->load->view('templates/web/handbags');
		
	}

	public function accessories()
	{
		$this->load->view('templates/web/accessories');
		
	}

	public function wallets()
	{
		$this->load->view('templates/web/wallets');
		
	}

	public function mens()
	{
		$this->load->view('templates/web/mens');
		
	}

	public function shoes()
	{
		$this->load->view('templates/web/shoes');
		
	}

	public function services()
	{
		$this->load->view('templates/web/services');
		
	}

	public function contact()
	{
		$this->load->view('templates/web/contact');
		
	}
}
