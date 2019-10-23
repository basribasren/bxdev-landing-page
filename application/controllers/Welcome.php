<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
		$this->load->model('welcome_model');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	public function add_subscriber() {
		$email = $this->input->post('email');
		$data = array(
            'email' => $email
        );
		$this->welcome_model->subscribe($data);
		redirect('home');
	}

	public function send_email() {
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$data = array(
            'name_sender' => $name,
            'email_sender' => $email,
            'subject_message' => $subject,
            'body_message' => $message
        );
		$this->welcome_model->email($data);
		redirect('home');
	}
}
