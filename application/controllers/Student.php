
<?php
class Student extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
    
        $this->load->view('student_form');
    }

    public function create() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile_no' => $this->input->post('mobile_no')
        );
        $created = $this->Student_model->create_student($data);
        if ($created) {
            $reg['register']=true;
            
        $this->load->view('student_form',$reg);
            
        } 
    }

    public function read() {
        $data['students'] = $this->Student_model->get_students();
        $this->load->view('student_list', $data);
    }
    public function edit($id){
        $val['value']=  $this->Student_model->get_student($id);
        $this->load->view('student_form',$val);
    }
    public function update($id) {
     extract($_POST);
     
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile_no' => $this->input->post('mobile_no')
        );
        $updated = $this->Student_model->update_student($id, $data);
        if ($updated) {
            $this->read();
        } 
    }

    public function delete($id) {
        $deleted = $this->Student_model->delete_student($id);
        if ($deleted) {
           $this->read();
        } 
    }
}


