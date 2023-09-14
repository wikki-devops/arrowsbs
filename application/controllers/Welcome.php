<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
		$data['view_page'] ='index';
		$this->load->view('welcome_message', $data);
	}
	public function about()
	{
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
		$data['page'] ='';
		$data['page_title'] ='About';
		$data['page_title_img'] = 'about-title.webp';
		$data['view_page'] = 'about';
		$this->load->view('welcome_message', $data);
	}
	public function services()
	{
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
		$data['page'] ='';
		$data['page_title'] = 'Services';
		$data['page_title_img'] = 'service-title.webp';
		$data['view_page'] = 'services';
		$this->load->view('welcome_message', $data);
	}
	public function contact()
	{
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
		$data['page'] ='';
		$data['page_title'] = 'Contact';
		$data['page_title_img'] = 'contact-title.webp';
		$data['view_page'] = 'contact';
		$this->load->view('welcome_message', $data);
	}
}
