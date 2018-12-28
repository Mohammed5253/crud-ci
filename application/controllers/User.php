<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('UserModel');
    }
	public function index()
	{
        
        $data['users'] = $this->UserModel->get_last_ten_entries();
        $this->load->view('layout/header');
        $this->load->view('user/index',$data);
        
    }
    
    public function register(){
       
        $this->UserModel->insert_entry();
        $data['users'] = $this->UserModel->get_last_ten_entries();
        $this->load->view('layout/header');
        $this->load->view('user/index',$data);
    }


    public function editEntries($id){
       
        $data['entry'] = $this->db->get_where('entries',array('id'=>$id))->row();
        $this->load->view('layout/header');
        $this->load->view('user/edit',$data);
    }

    public function updateEntries($id){
       
        $this->UserModel->update_data($id);
        $data['users'] = $this->UserModel->get_last_ten_entries();
        $this->load->view('layout/header');
        $this->load->view('user/index',$data);
    }

    public function deleteEntries($id){
        $this->db->where('id',$id);
        $this->db->delete('entries');
       
        $data['users'] = $this->UserModel->get_last_ten_entries();
        $this->load->view('layout/header');
        $this->load->view('user/index',$data);
    }
}
