<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemsController extends CI_Controller {

	public function index()
	{
		$this->load->model('ItemsModel');
        echo $this->ItemsModel->index();
	}
}
