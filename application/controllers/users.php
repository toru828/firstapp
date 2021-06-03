<?php
class Users extends CI_Controller {

    public function index()
    {
        // Load header view
        $this->load->view('header'); 

        // Load index (List of Users) view
        $this->load->view('users/index');

        // Load footer view
        $this->load->view('footer');
    }
}
