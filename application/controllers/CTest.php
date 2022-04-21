<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTest extends CI_Controller {

	
	public function index()
	{
        $data['page_title'] = 'Page Home';
		$this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/blank_content');
        $this->load->view('layouts/footer');
	}
    public function hello()
    {
        $data['page_title'] = 'Page 1';
		$this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('landing_page/page_1');
        $this->load->view('layouts/footer');
    }
    public function tabel()
    {
        $data['page_title'] = 'Page 2';
		$this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('landing_page/page_2');
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        $data['page_title'] = 'Page 3';
		$this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('landing_page/page_3');
        $this->load->view('layouts/footer');
    }
}
