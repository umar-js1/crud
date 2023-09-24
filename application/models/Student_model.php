
<?php
class Student_model extends CI_Model {
    public function create_student($data) {
        return $this->db->insert('student', $data);
    }

    public function get_students() {
        return $this->db->get('student')->result();
    }

    public function get_student($id) {
        return $this->db->get_where('student', array('id' => $id))->row();
    }

    public function update_student($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('student', $data);
    }

    public function delete_student($id) {
        $this->db->where('id', $id);
        return $this->db->delete('student');
    }
}
