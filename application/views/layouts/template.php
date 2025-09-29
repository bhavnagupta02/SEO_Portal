<?php
	$this->load->view('layouts/header', $title);
	$this->load->view('layouts/sidebar');
	$this->load->view($content);
	$this->load->view('layouts/footer');
?>