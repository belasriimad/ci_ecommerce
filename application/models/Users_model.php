<?php

/**
 *
 */
class Users_model extends CI_Model
{
  public function register(){

      $data = array(
          'nom' => $this->input->post('firstname'),
          'prenom' => $this->input->post('lastname'),
          'email' => $this->input->post('email'),
          'pseudo' => $this->input->post('username'),
          'password' => md5($this->input->post('password')),
          'date_insc' => date('Y-m-d h:i:s')
      );
      $insert = $this->db->insert('users',$data);
      return $insert;
  }
  public function login($email,$passe){
        $this->db->where('email',$email);
        $this->db->where('password',$passe);
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return $result->row();
        }else{
            return false;
        }
  }
}


 ?>
