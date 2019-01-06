<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projektLogin
 *
 * @author walder_omar
 */
class projektLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('validation_pomocne');
        $this->load->library('objectclass');
    }
    
    //Úvodní stránka
    public function index() {
        $data["title"] = "Úvodní stránka";
        $data["main"] = "frontendProjekt/Login";
        $this->layout->generate($data);
    }
    
    //Přihlášení
    public function login() {

        $data["title"] = "Přihlášení";
        $data["main"] = "frontendProjekt/Login";
        $data["message"] = $this->session->flashdata('message');
        $this->layout->generate($data);
    }

    function loginFinish() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $return = $this->ion_auth->login($username, $password);

        if ($return) {
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('message', 'Your e-mail or your password is wrong');
            redirect('loginProjekt');
        }
    }
}
