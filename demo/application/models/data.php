<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class data extends CI_Model{

	public function getdata($table)
	{
         $query=$this->db->get($table);
		 return $query->result();
	}
	public function deletedata($table,$data,$dataname)
	{  
		 $this->db->where($dataname,$data);
       $this->db->delete($table);

        return true;
	}
public function getdatawhere($table,$data){

   $query=$this->db->get_where($table,$data);
   $data1['data'] =  $query->result();
   
return $data1;
}
public function insertpost($table,$data){
   $query=$this->db->get_where($table,$data);
   $qu=$query->result();
   
return $qu;
}
public function datachange($table,$data){

 $this->db->set('password',$data['password']);
$this->db->where('email',$data['email']);
 $result = $this->db->update('user'); 
}
public function datachange1($table,$data,$wheredata){

 $this->db->set($data);
$this->db->where('uid',$wheredata);
 $result = $this->db->update('user'); 
}
	public function insert1($table,$data)
	{
		$query=$this->db->insert($table,$data);
		return $query;
	}

public function getjoindata($table1,$table2,$wherecase1,$wherecase2,$data){
	$this->db->select("*");
$this->db->from($table1);
 $this->db->where($table2.'.cname',$data['city']);
 $this->db->where($table1.'.branch',$data['branch']);
  $this->db->where($table1.'.course',$data['course']);
$this->db->join($table2,$table2 .".".$wherecase2."=".$table1.".".$wherecase1);

$query = $this->db->get();

$qu['listdata']=$query->result();

return $qu;

//
// $this->db->select('firstTable.*, secondTable.*');
// $this->db->from('firstTable');
//$this->db->join('secondTable', 'secondTable.id = firstTable.id');
// $query = $this->db->get();

//    $qu=$query->result();
   
// return $qu;
//$this->db->join($table2,$table2 .".".$wherecase."=".$table1.".".$wherecase);
}
public function getjoindata1($table1,$table2,$wherecase1,$wherecase2){
	$this->db->select("*");
$this->db->from($table1);

 
$this->db->join($table2,$table2 .".".$wherecase2."=".$table1.".".$wherecase1);

$query = $this->db->get();

$qu['listdata']=$query->result();

return $qu;

//
// $this->db->select('firstTable.*, secondTable.*');
// $this->db->from('firstTable');
//$this->db->join('secondTable', 'secondTable.id = firstTable.id');
// $query = $this->db->get();

//    $qu=$query->result();
   
// return $qu;
//$this->db->join($table2,$table2 .".".$wherecase."=".$table1.".".$wherecase);
}
public function cdata($table1,$table2,$wherecase1,$wherecase2,$data){
$this->db->select("*");

$this->db->from($table1);
$this->db->where($table1.'.branch',$data);
$this->db->join($table2,$table2 .".".$wherecase2."=".$table1.".".$wherecase1);
$query = $this->db->get();
$qu['listdata']=$query->result();
return $qu;

//
// $this->db->select('firstTable.*, secondTable.*');
// $this->db->from('firstTable');
//$this->db->join('secondTable', 'secondTable.id = firstTable.id');
// $query = $this->db->get();

//    $qu=$query->result();
   
// return $qu;
//$this->db->join($table2,$table2 .".".$wherecase."=".$table1.".".$wherecase);
}
		
}
?> 	