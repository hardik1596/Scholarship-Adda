<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function adminlogin()
	{

		$this->load->view('adminlogin');
	}
public function index()
	{
		$this->load->view('admin');
	}
	public function userlist()
	{         $this->load->model('data');
		$result = $this->data->getjoindata1('user','city','city','cid');
                // $result['userdata1'] = $this->data->getdata('user');
		$this->load->view('userlist',$result);
	}
   public function scholarshiplist()
	{
		 $this->load->model('data');
		$result = $this->data->getjoindata1('scholarshiplist','city','city','cid');
                // $result['userdata1'] = $this->data->getdata('user');
		$this->load->view('scholarshiplist',$result);
	}
    public function postscholarship()
	{
		$this->load->model('data');
                $result['city1'] = $this->data->getdata('city');

		$this->load->view('postscholarship',$result);
	}

	public function login_data(){
$data['id']=$this->input->post('user');
$data['password']=$this->input->post('password');

        $this->load->model('data');
        $result = $this->data->getdatawhere('admin',$data);
 if($result['data'] == null ) {  
 	$this->load->view('adminlogin');
 }
 else{

 	$this->session->set_userdata('auid',$result['data'][0]->auid);
        $this->load->model('data');
        $result['userlist'] = $this->data->getdata('user');
        $result['scholarshiplist'] = $this->data->getdata('scholarshiplist');
             
 	$this->load->view('admin',$result);

 }
}

public function deletedata($data,$table,$dataname){

     $this->load->model('data');

       $result= $this->data->deletedata($table,$data,$dataname);
    	if($result== true){
    	if($table=="scholarshiplist"){
  $this->scholarshiplist();
}
else{
    $this->userlist();
  }	
  	
       	}

}

public function editdata($data,$table,$dataname){
 $this->load->model('data');
$data=array($dataname=>$data);
$result= $this->data->getdatawhere($table,$data);
if($table=="user"){
 $this->load->view('adminuseredit',$result);
}
else{
     $this->load->view('scholarshipuseredit',$result);
}
}

public function logout(){
	$this->session->unset_userdata($_SESSION['auid']);
	$this->load->view('index');
}
 public function post()
	{
		$this->load->library('form_validation');
	
		 
	  $this->form_validation->set_rules('sname', 'sname', 'required');
	  $this->form_validation->set_rules('apply', 'apply', 'required');
	  $this->form_validation->set_rules('documents', 'documents', 'required');
	  $this->form_validation->set_rules('eligibility', 'eligibility', 'required');
	  $this->form_validation->set_rules('benefits', 'benefits', 'required');
          $this->form_validation->set_rules('course', 'course', 'required');
          $this->form_validation->set_rules('branch', 'branch', 'required');
$this->form_validation->set_error_delimiters('<div class="verror text-danger">','</div>' );
 $this->form_validation->set_message('required','*The {field} field is required.');
		  
		   if($this->form_validation->run() == FALSE) {   
            $this->postscholarship(); 

         } 

         else{
         
         
         $data['sname']=$this->input->post('sname');
         $data['eligibility']=$this->input->post('eligibility');
         $data['benefits']=$this->input->post('benefits');	
         $data['documents']=$this->input->post('documents');
         $data['apply']=$this->input->post('apply');	
         $data['course']=$this->input->post('course');   
         $data['branch']=$this->input->post('branch');   
       $this->load->model('data');
       $result= $this->data->insert1('scholarshiplist',$data);
       if($result==true)
			{
		    $this->postscholarship(); 
		 	}
       
	}	
	}
	
}


