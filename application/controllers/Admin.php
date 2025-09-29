<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library(array('session', 'email', 'upload', 'form_validation'));
		$this->load->helper(array('url', 'file'));
		$this->load->model(array('Admin_model'));
        //$this->user_type = $this->session->userdata('user_level');
		$this->userid = $this->session->userdata('id');
		$this->admin_data = $this->Admin_model->admin_details($this->userid);
	}

	public function index()
	{
		if($this->session->has_userdata('id') && $this->session->userdata('type') == 'admin'){
            redirect('dashboard');
        }
		if(!empty($this->input->post())){
			$postData = $this->input->post();
			$admin_details = $this->Admin_model->checkuser($postData);
			if(!empty($admin_details)){
				$admin_details['type'] = 'admin';
				$this->session->set_userdata($admin_details);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('msg','<div style="float: left;width: 100%;" class="alert alert-danger text-center">Email & Password combination not matched.</div>');
		        redirect('');
			}
		}
		$page['title'] = 'Login | SEO Portal Admin';
		$this->load->view('pages/login', $page);
		$this->load->view('layouts/footer');
	}

	public function dashboard(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		$page['title'] = 'Dashboard | SEO Portal Admin';
		$page['content'] = 'pages/dashboard';
		$this->load->view('layouts/template', $page);
	}

	public function profile(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		$page['title'] = 'Profile | SEO Portal Admin';
		$page['content'] = 'pages/profile';
		$this->load->view('layouts/template', $page);
	}

	public function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './uploads/profile_pic/';
        $config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']     = 2097152;
        return $config;
    }
	public function edit_profile(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		if(!empty($this->input->post()))
		{
			$postData = $this->input->post();
			if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
				$this->upload->initialize($this->set_upload_options());
				if (!$this->upload->do_upload('img')){
					$this->session->set_flashdata('msg','<div style="float: left;width: 100%;" class="alert alert-danger text-center">'.$this->upload->display_errors().'</div>');
					redirect('admin/add_students');
				}else {
					$upload_data = $this->upload->data();
					$postData["img"] = 'uploads/profile_pic/'.$upload_data['file_name'];
					$filename2 = $upload_data['file_name'];
					$postData['img'] = $filename2;
				}
			}
			$update = $this->Admin_model->update_profile($postData);
			if($update){
				$this->session->set_flashdata('msg','<div style="float: left;width: 100%;" class="alert alert-success text-center">Your profile updated successfully.</div>');
		        redirect('profile');
			}
			else{
				$this->session->set_flashdata('msg','<div style="float: left;width: 100%;" class="alert alert-danger text-center">Please try again, having  some error.</div>');
		        redirect('edit-profile/'.$this->userid);
			}
		}
		$page['title'] = 'Edit Profile | SEO Portal Admin';
		$page['content'] = 'pages/edit-profile';
		$this->load->view('layouts/template', $page);
	}

	public function change_password(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		if(!empty($this->input->post()))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->userid;
			$password = $this->Admin_model->fetch_pass($this->userid);
			if($old_pass != $password)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Invalid old password, please enter correct password.</div>');
		        redirect('change-password');
			}
			else if($new_pass != $confirm_pass)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your new and confirm password does not match, please enter same.</div>');
		        redirect('change-password');
			}
			else
			{
				$changepass = $this->Admin_model->change_pass($this->userid, $new_pass);
				if($changepass == 1){
				/*$from_email = 'admin@seoportal.com';
				$email_body = '
				<p style="width:100%; margin-bottom:30px; font-size:16px;">You have changed your password successfully on SEO Portal.
				</p>';

				$message = email_template($email_body);
				$subject = 'Change Password - SEO Portal'; 
				$valueArray = array(
					'toEmail' => $this->admin_data['email'],
					'fromEmail' => $from_email,
					'fromName' => 'SEO Portal',
					'subject' => $subject,
					'message' => $message
				);
				//print_r($valueArray); die();
				custom_email_function($valueArray);*/
				$this->session->set_flashdata('msg','<div style="float: left;width: 100%;" class="alert alert-success text-center">Your password successfully changed.</div>');
		        	redirect('profile');
				}
				else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again, having some error.</div>');
		        	redirect('change-password');
				}
			}
		}
		$page['title'] = 'Change Password | SEO Portal Admin';
		$page['content'] = 'pages/change-password';
		$this->load->view('layouts/template', $page);
	}

	public function add_client(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		if(!empty($this->input->post()))
		{
			$postData = $this->input->post();
			$add_client = $this->Admin_model->add_client($postData);
			if($add_client==1){
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Client successfully added.</div>');
		        redirect('add-client');
			}
			else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again, having  some error.</div>');
		        redirect('add-client');
			}
		}
		$page['title'] = 'Add CLient | SEO Portal Admin';
		$page['content'] = 'pages/add-client';
		$this->load->view('layouts/template', $page);
	}

	public function logout(){
		if($this->session->has_userdata('id') && $this->session->userdata('type') == 'admin' ){
			$this->session->sess_destroy();
			redirect('');
		}	
	}

	public function client_listing(){
	    if(!$this->session->has_userdata('id') && $this->session->userdata('type') != 'admin' ){
			redirect('');
		}
		$page['title'] = 'Clients | SEO Portal Admin';
		$page['content'] = 'pages/client-listing';
		$this->load->view('layouts/template', $page);
	}
}