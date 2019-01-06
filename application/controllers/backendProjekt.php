<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author zdrh
 */
class backendProjekt extends Admin_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->layout->setLayout('layout/layout_admin');
        $this->load->helper(array('form', 'url'));
    }

    public function dashboard() {
        $data['title'] = "Dashboard";
        $data['main'] = 'backendProjekt/dashboard';
        $this->layout->generate($data);
    }
    
    public function table() {
        $data['title'] = "Seznam uživatelů";
        $data['main'] = 'backendProjekt/table';
        $this->layout->generate($data);
    }
    
    public function edit() {
        $data['title'] = "Editing";
        $data['main'] = 'backendProjekt/edit';
        $this->layout->generate($data);
    }

    public function delete() {
        $data['title'] = "Deleting";
        $data['main'] = 'backendProjekt/delete';
        $this->layout->generate($data);
    }

    function logout() {
        $this->ion_auth->logout();
        redirect('');
    }

    public function uploadView(){
        $data = array('error' => ' ' );
        $data['title'] = "Upload";
        $data['main'] = 'backendProjekt/upload';
        $this->layout->generate($data);
    }
    
    public function do_upload()
    {
            $config['upload_path']          = '';
            $config['allowed_types']        = 'gif|jpg|png|svg';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $data = $error;
                    $data['title'] = "Upload";
                    $data['main'] = 'backendProjekt/upload';
                    $this->layout->generate($data);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('backendProjekt/upload-success', $data);
            }
    }
}

