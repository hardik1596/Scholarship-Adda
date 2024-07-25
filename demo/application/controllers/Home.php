<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
$this->load->model('data');
		$result = $this->data->getjoindata1('scholarshiplist','city','city','cid');
		$this->load->view('index',$result);
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function listing()
	{
		$this->load->view('listing');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function register()
	{
		$this->load->view('register');
	}
		public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function changepassword()
	{
		$this->load->view('changepassword');
	}
	public function editprofile(){

  $data['uid'] = $this->session->userdata('uid');
		$this->load->model('data');
    $result = $this->data->getdatawhere('user',$data); 
    
		 $this->load->view('editprofile',$result);
	}
	public function editpro(){
        $data1['fname']=$this->input->post('fname');
        $data1['lname']=$this->input->post('lname');
        $data1['phone']=$this->input->post('phone');
        $data1['gender']=$this->input->post('gender');
        $data1['dob']=$this->input->post('dob');
        $data1['email']=$this->input->post('email');
        $data1['city']=$this->input->post('city');
        $data1['course']=$this->input->post('course');
        $this->load->helper(array('form','url'));
         $config['upload_path'] = './upload/'; 
            $config['allowed_types']   = 'gif|jpg|png';
            $config['max_size']        = 1000;
            $config['max_width']       = 1024;
            $config['max_height']      = 768;

         $this->load->library('upload',$config);
  
         $this->upload->do_upload('photo'); 
  
       $data = array('upload_data' => $this->upload->data()); 
      
  $data1['photo']=$data['upload_data']['file_name'];
       





              $data = $this->session->userdata('uid');
        $this->load->model('data');
     $result = $this->data->datachange1('user',$data1,$data); 
     $this->load->view('editprofile');

}	

public function data_validation(){
	 	 $this->load->library('form_validation');
		 $this->form_validation->set_rules('fname', 'First name', 'required');
	 	 $this->form_validation->set_rules('lname', 'Last name', 'required');
 	     $this->form_validation->set_rules('email', 'Email address', 'required');
	 	 $this->form_validation->set_rules('phone', 'Phone number', 'required');
         $this->form_validation->set_rules('gender', 'Gender', 'required');
	 	 
	 	 $this->form_validation->set_rules('dob', 'Date of birth', 'required');
		 $this->form_validation->set_rules('course', 'course', 'required');
	 	 $this->form_validation->set_rules('password', 'password', 'required');
	 	 $this->form_validation->set_rules('cpassword', 'cpassword', 'matches[password]');
$this->form_validation->set_error_delimiters('<div class="verror text-danger">','</div>' );
 $this->form_validation->set_message('required','*The {field} field is required.');
		
		   if($this->form_validation->run() == FALSE) {   
            $this->register(); 
         } 
         else{
        $data1['fname']=$this->input->post('fname');
        $data1['lname']=$this->input->post('lname');
        $data1['phone']=$this->input->post('phone');
        $data1['gender']=$this->input->post('gender');
        $data1['dob']=$this->input->post('dob');
        $data1['email']=$this->input->post('email');
        $data1['city']=$this->input->post('city');
        $data1['course']=$this->input->post('course');
        $data1['password']=$this->input->post('password');

       $this->load->helper(array('form','url'));
         $config['upload_path'] = './upload/'; 
            $config['allowed_types']   = 'gif|jpg|png';
            $config['max_size']        = 1000;
            $config['max_width']       = 1024;
            $config['max_height']      = 768;

         $this->load->library('upload',$config);
  
         $this->upload->do_upload('profilepic'); 
  
       $data = array('upload_data' => $this->upload->data()); 
      
  $data1['photo']=$data['upload_data']['file_name'];
       $this->load->model('data');

      $result= $this->data->insert1('user',$data1);
      if($result==true)
			{

		     $this->load->view('login');
		 	}
       
	}	
         }
 public function login_data(){

 $this->load->library('form_validation');
	
		 $this->form_validation->set_rules('user', 'user', 'required');
	 	
	 	 $this->form_validation->set_rules('password', 'password', 'required');
$this->form_validation->set_error_delimiters('<div class="verror text-danger">','</div>' );
 $this->form_validation->set_message('required','*The {field} field is required.');
		
		   if($this->form_validation->run() == FALSE) {   
            $this->login(); 
         } 
         else{


$data['email']=$this->input->post('user');
$data['password']=$this->input->post('password');

    $this->load->model('data');
        $result = $this->data->getdatawhere('user',$data);


 if($result['data'] == null) {  
 	$this->load->view('login');
 } 
 else{
 
 	$this->session->set_userdata('uid',$result['data'][0]->uid);
 	 $this->load->view('index');

 }

}
 }


 public function logout(){ 
	$this->session->unset_userdata('uid');

	$this->load->view('index');
}

 public function forgot(){ 
	$this->load->view('forgot');
}
 public function forgotp(){ 
$this->load->library('form_validation');
	
		 $this->form_validation->set_rules('emailchange', 'email', 'required');
	 	
	 	 $this->form_validation->set_rules('changePassword', 'password', 'required');

  $this->form_validation->set_error_delimiters('<div class="verror text-danger">','</div>' );
 $this->form_validation->set_message('required','*The {field} field is required.');
		
		   if($this->form_validation->run() == FALSE) {   
            $this->forgot(); 
         } 
         else{


$data['email']=$this->input->post('emailchange');
$data['password']=$this->input->post('changePassword');
 $this->load->model('data');
   $result = $this->data->datachange('admin',$data);
 if($result == FALSE) {  
 }
 else{
 
 	$this->load->view('login');
 }

}
}

 public function search1(){ 

	     

	      $data['city']=$this->input->post('city');
        $data['course']=$this->input->post('course');
       $data['branch']=$this->input->post('branch');
    
   $this->load->model('data');
    
    
   $result = $this->data->getjoindata('scholarshiplist','city','city','cid',$data);

   $this->load->view('listing', $result);
}

 public function cdata($data){ 

	 
    echo $data;
    die();
   $this->load->model('data');
    
    
   $result = $this->data->cdata('scholarshiplist','city','city','cid',$data);

   $this->load->view('listing', $result);
}




}