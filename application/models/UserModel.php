<?php

class UserModel extends CI_Model {

    public function get_last_ten_entries()
    {
            $query = $this->db->get('entries', 10);
            return $query->result();
    }
    public function insert_entry()
    {
            $this->first_name  = $_POST['first_name']; // please read the below note
            $this->last_name  = $_POST['last_name'];
            $this->email  = $_POST['email'];
            $this->password  = $_POST['password'];

           return $this->db->insert('entries', $this);
        
    }

    public function update_data($id)
    {   $data = array(
            'first_name'  => $_POST['first_name'],
            'last_name'  => $_POST['last_name'],
            'email'  => $_POST['email'],
           );
            $this->db->where('id',$id);
            return $this->db->update('entries',$data);
    }
}

?>