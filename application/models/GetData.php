<?php
class GetData extends CI_Model
{
    public function getproducts()
    {
        $this->load->database();
        return $this->db->get("products")->result_array();
    }
	public function getfaq()
    {
        $this->load->database();
        return $this->db->get("faq")->result_array();
    }
}
