<?php
class rModel extends CI_Model{
    public function insertdata($r){
       /*& print_r ($r); */
       $this->load->database();
     
    return   $this->db->insert("student",$r);

    }
    public function records(){
        $this->load->database();
      return  $this->db->get('student')->result();
    }
   public function editdata($data){
    $this->load->database();
    $this->db->where('student_ID',$data);
    return $this->db->get('student')->result();
   }
} 