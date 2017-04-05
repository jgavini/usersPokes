<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$userData = $this->input->post();
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('alias', 'Alias', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required');		
		if($this->form_validation->run())
		{
			$this->User->registerUser($userData);
			$this->session->set_flashdata('success', "You are officially registered! Please Login and begin POKING around!<br><img src='https://media.giphy.com/media/E49KOgnZDmLXq/giphy.gif'>");
			$this->load->view('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('/');
		}		
	}

	public function login()
	{
		$loginData = $this->input->post();

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run())
		{
			$user = $this->User->loginUser($loginData);
			if($user)
			{
				$this->session->set_userdata('logged_in', TRUE);
				$this->session->set_userdata('name', $user['name']);
				$this->session->set_userdata('alias', $user['alias']);
				$this->session->set_userdata('email', $user['email']);
				$this->session->set_userdata('id', $user['id']);
				redirect('/profile');
			}
			else
			{
				$this->session->set_flashdata("error", "Invalid email or password.");
				redirect('/');
			}
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('/');
		}
	}

	public function profile()
	{
		$id = $this->session->userdata('id');
		$users = $this->User->getAllUsers($id);
		$pokes = $this->Poke->getAllPokes($id);
		$this->load->view('profile', array('users' => $users, 'pokes' => $pokes));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('users/logoutMessage');
	}
	public function logoutMessage(){
		$this->session->set_flashdata("logout", "You have logged out! Please POKE again soon =)<br><img src='https://media.giphy.com/media/TObbUke0z8Mo/giphy.gif'>");
		redirect('/');
	}
}

