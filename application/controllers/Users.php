<?php

class Users extends CI_Controller {
	public function index() {
		$this->load->view('users/index');
	}
	public function show() {
		// return other view
		$this->load->view('users/show');
	}
	public function create() {
		$this->load('users/create');	
	}
	public function store() {
		// store the user
		$this->redirect('index');
	}
 }