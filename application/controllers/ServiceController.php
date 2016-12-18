<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceController
 *
 * @author anurartkae
 */
class ServiceController  extends CI_Controller{
    //put your code here
    public function serviceView(){
        $this->load->view('include/header');
        $this->load->view('fontend/ServiceView');
        $this->load->view('include/footter');
    }
}
