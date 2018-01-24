<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class data2 extends CI_Controller {

            function __construct(){
            parent::__construct();
            $this->load->model('m_data');

      }
            public function index(){
            $x['data']=$this->m_data->show_orang();
            $this->load->view('v_data2',$x);

      }
}