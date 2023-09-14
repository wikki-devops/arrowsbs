<?php

class Products extends CI_Controller {

    public function tally_prime()
    {   
        $this->load->model('GetData');
		$data['faqs'] = $this->GetData->getfaq();
		$data['products'] = $this->GetData->getproducts();
        $data['page'] ='<li> Products </li>';
		$data['page_title'] = 'TallyPrime Features';
		$data['page_title_img'] = '1.png';
        $data['view_page'] ='products/tally-prime';
        $this->load->view('welcome_message', $data);
    }
	public function ERPnext()
    {
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
        $data['page'] ='<li> Products </li>';
        $data['page_title'] = 'ERPNext';
        $data['page_title_img'] = '2.png';
        $data['view_page'] ='products/ERPnext';
        $this->load->view('welcome_message', $data);
    }
	public function mobile_apps()
    {
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
        $data['page'] ='<li> Products </li>';
        $data['page_title'] = 'Mobile Apps';
        $data['page_title_img'] = '3.png';
        $data['view_page'] ='products/mobile-apps';
        $this->load->view('welcome_message', $data);
    }
    public function biz_analyst()
    {
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
        $data['page'] ='<li> Products </li>';
        $data['page_title'] = 'Biz Analyst';
        $data['page_title_img'] = '4.png';
        $data['view_page'] ='products/biz-analyst';
        $this->load->view('welcome_message', $data);
    }
	public function websitedevelopment()
    {
		$this->load->model('GetData');
		$data['products'] = $this->GetData->getproducts();
        $data['page'] ='<li> Website Development </li>';
        $data['page_title'] = 'Website Development';
        $data['page_title_img'] = '6.png?updatedAt=1691564396547';
        $data['view_page'] ='products/websitedevelopment';
        $this->load->view('welcome_message', $data);
    }  
}
