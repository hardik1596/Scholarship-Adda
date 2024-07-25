<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adddata extends CI_Controller {
public function enter(){
		$data['fname']=$this->input->post('fname');
        $data['lname']=$this->input->post('lname');
        $data['email']=$this->input->post('email');
        $data['phone']=$this->input->post('phone');
        $data['gender']=$this->input->post('gender');
        $data['dob']=$this->input->post('dob');
        $data['postcode']=$this->input->post('code');
        $data['city']=$this->input->post('city');
        $data['Course']=$this->input->post('Course');
        $data['password']=$this->input->post('password');


       $this->load->model('data');
       $result= $this->data->insert($data);
       if($result==true)
			{
		$this->load->view('login');
			}
	}

}
