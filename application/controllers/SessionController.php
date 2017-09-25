<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class SessionController extends CI_Controller 
{
	public function signup()
	{
		
			if($this->input->post())
					{
						$username=$this->input->post('username');
						$password=$this->input->post('password');
						$this->load->library('form_validation');
						$this->form_validation->set_rules('username', 'Username', 'required|is_unique[customer.username]');
						$this->form_validation->set_rules('password', 'Password', 'required');
						$credentials=array("username" =>$name ,"password" =>$password);
						$this->load->model('SessionModel');
						if ($this->SessionModel->insertData($credentials))
						$this->load->view('loginhome');
						else
						$this->load->view('loginhome');
					}
				else
					{
						$this->load->view('loginhome');
					}	

			
	}
	public function login()
		{
			if(!empty($this->session->userdata('loggedin')))
			{
				redirect('dashboard','refresh');
			}
			else
			{
				
			if($this->input->post())
				{
					$username=$this->input->post('username');
					$password=$this->input->post('password');
					$logindetails= array('username' => $username, 'password'=> $password);
					$this->load->model('SessionModel');
					if($this->SessionModel->search($logindetails))
						{
							$sessiondetails=array('username' => $username, 'password'=> $password,'loggedin'=>TRUE);
							$this->session->set_userdata($sessiondetails);
							redirect('dashboard','refresh');

						}
					else
						{
							echo"fail";
						}	
				}
			else
				{
					$this->load->view('loginhome');
				}
			}

			}
	
	public function logdashboard()
		{
			if(!empty($this->session->userdata('loggedin')))
			{
			
				$this->load->view('myview');

			}
			else
			{
				redirect('login','refresh');
			}
		}
	public function logout()
		{
			$this->session->unset_userdata('Username');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('loggedin');
			//$this->session->unset_userdata($sessiondetails);
			$this->session->sess_destroy();
			redirect('login','refresh');
		}

}

// 	public function login()
// 	{
// 		       // echo "string"; die;
// 		if(!empty($this->session->userdata('logged_in')))
// 			redirect('mypage','refresh');
// 		else
// 		{
// 			if($this->input->post())
// 			{

// 				$uname=$this->input->post('username'); 
// 				$this->load->model('SessionModel');
				
// 				$data['result']=$this->SessionModel->search($uname); 
				
// 				if (!empty($data['result'][0]->username==$uname)){
					
// 					$sessiondetails=array('username' =>$data['result'][0]->username,
// 						'password'=>$data['result'][0]->password,'logged_in'=>true);

// 					$this->session->set_userdata($sessiondetails);
// 					$this->load->view('myview');
// 				}
					
// 				else{
// 					redirect('login','refresh');
// 					}
// 			}
// 		else
// 		redirect('login','refresh');
// 		}
// 	}

// 	public function logout()
// 	{
// 		$this->session->unset_userdata($sessiondetails);
// 		$this->session->sess_destroy();
// 		redirect('login','refresh');
		
// 	}

// 	public function viewsignuppage()
// 	{
// 		if(!empty($this->session->userdata('logged_in')))
// 		{
// 		redirect('login','refresh');
// 		}else
// 		$this->load->view('signuppage');
			
// 	}
// }
