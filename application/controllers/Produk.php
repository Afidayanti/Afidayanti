<?php

class Produk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("landing/head");
        $this->load->view("produk/navbar");
        $this->load->view("produk/jumb");
        $this->load->view("produk/produk");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}
}