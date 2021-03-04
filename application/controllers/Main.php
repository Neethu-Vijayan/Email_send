<?php
class Main extends CI_Controller
{
	function __construct()
	{
       parent::__construct();
       $this->load->library("session");
       $this->load->helper("form");
	}
	public function index()
	{
		$this->load->view("email_form");
	}
	public function email_form()
	{
		$from_email="neethu.vijayan@orisysacademy.com";
		$to_email=$this->input->post("email");
		$this->load->library("email");
		$this->email->from($from_email,'Admin');
		$this->email->to($to_email);
		$this->email->subject("Your New Password");
		$this->email->message("Use this passwordif(");
        if($this->email->send())
        {
        	$this->session->se_flashdata("email_send","Mail sent");
        }
        else
        {
        	$this->session->se_flashdata("email_send","Mail not send");
        	$this->load->view("email_form");
        }

	}
}