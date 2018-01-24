<?php
class m_karyawan extends CI_Model{
function insert() {
$input = array(
'id' => $this->input->post('id'),
'nama' => $this->input->post('nama'),
'alamat' => $this->input->post('alamat'),
);

$insert = $this->db->insert('orang', $input);
return $insert;

 }
}
?>