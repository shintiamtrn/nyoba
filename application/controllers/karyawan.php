
<?php

class karyawan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

      public function index(){
            $x['data']=$this->m_data->show_orang();
            $this->load->view('v_data',$x);
      }

public function add() {
$this->load->view('v_add_karyawan');
}

public function prosesadd() {
$this->load->model('m_karyawan');
$this->m_karyawan->insert();
redirect('karyawan');

}
}
?>
