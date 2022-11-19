<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view landing/overview.php
        $this->load->view("overview");
	}
}