<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}
	public function index()
	{
		$data['menu'] = $this->menu_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/content');
		$this->load->view('layout/menu', $data);
		$this->load->view('layout/list_menu', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}
