<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionModel extends CI_Model {

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
	public function insertData($credentials)
	{
		//var_dump($credentials);die;
		if($this->db->insert('customer',$credentials))
		{
			return true;
		}
		else
		{
			return false;
		};
	}

	public function search($logindetails)
	{

		$this->db->where('username',$logindetails['username']);
		$query=$this->db->get('customer');
		
		if($query->num_rows()>0){
			return true;
		} else {
			return false;
		}
	}
}
