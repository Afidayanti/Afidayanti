<?php

class Visimisi extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("landing/jumbotron");
        $this->load->view("visimisi/visimisi");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}
}