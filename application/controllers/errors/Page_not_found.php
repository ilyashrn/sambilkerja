<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function index()
	{
    $data = array('title' => "Page Not Found | SambilKerja.com");
    $this->load->view('html_head', $data);
    $this->load->view('header', $data);
    $this->load->view('content/page_missing', $data);
    $this->load->view('footer', $data);

	}

}