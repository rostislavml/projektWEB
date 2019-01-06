<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projektRegister
 *
 * @author walder_omar
 */
class projektRegister extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('validation_pomocne');
        $this->load->library('objectclass');
    }
    
        function register() {
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');
        $omezeni = array($password_min, $password_max);
        $inputs = array('name', 'email', 'username', 'password', 'confirm');
        
        if(!isset($this->session->data)) {
            $data = $this->validation_pomocne->createFreeArray($inputs);
            $this->session->set_flashdata('data', $data);
        }
        
        $data["omezeni"] = $omezeni;
        $data["title"] = "Registrace";
        $data["main"] = "frontendProjekt/Register";
        $this->layout->generate($data);
    }

    function registerFinish() {
        //Načtení konfiguračních proměnných
        $tables = $this->config->item('tables', 'ion_auth');
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');

        //Pole z formuláře
        $username = $this->input->post('name');
        $password = $this->input->post('email');
        $name = $this->input->post('username');
        $email = $this->input->post('password');
        $confirm = $this->input->post('confirm');


        //Podmínky polí
        $this->form_validation->set_rules('name', 'jméno', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'uživatelské jméno', 'required|is_unique[' . $tables['users'] . '.username]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[' . $password_min . ']|max_length[' . $password_max . ']|matches[confirm]');
        $this->form_validation->set_rules('confirm', 'potvrzení hesla', 'required');

        $return = $this->form_validation->run();
        if ($return) {
            $additional_data = array(
                'first_name' => $name,
            );
            $this->ion_auth->register($username, $email, $password, $additional_data);
            $this->session->set_flashdata('message', 'Your account was created, now you can log in.');
            redirect('loginProjekt');
        } else {
            
            $inputs = array('name', 'email', 'username', 'password', 'confirm');
            $values = array($name, $email, $username, '', '');
            $data = $this->validation_pomocne->createData($inputs, $this->form_validation->error_array(), $values);
            
            $this->session->set_flashdata('data', $data);
            
            redirect('registerProjekt');
        }
    }
}
