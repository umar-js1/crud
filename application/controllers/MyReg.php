<?php

class MyReg extends CI_Controller
{
    public function form(){
        $this->load->helper("url");
      
        $this->load->view("form");
      
    }
    public  function savedata(){
        extract($_POST);
        $arr =[
            "student_NAME"=>$name,
            "student_EMAIL"=>$mail,
            "student_PASS"=>$password
        ];
        $this->load->model("rModel");
       $r= $this->rModel->insertdata($arr);
       $this->load->helper('url');
       $t['t1']=$name;
        if($r){
            $msg['ms']=' Form';
           
            $this->load->view("form",$msg);
         
        }
        else {
            echo "errr whle lp";
        }
       /* $er = $this->input->post("name");
        echo "$er" ;
       
        echo " <br>" ;ll
        echo($name."  ".$mail."   ".$password); */
    }
    public function fetch(){
        $this->load->model('rModel');
       $data['data'] = $this->rModel->records();
       
       $this->load->view('recordview',$data);
    }
    public function edit($id){
        $this->load->model('rModel');
     $res['res']=   $this->rModel->editdata($id);
  
    }
}

















