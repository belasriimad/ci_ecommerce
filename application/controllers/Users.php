<?php

/**
 *
 */
class Users extends CI_Controller
{
    public function register(){
      $this->form_validation->set_rules('firstname','First Name','required|min_length[3]|trim', array('required' => 'You must provide a %s.'));
      $this->form_validation->set_rules('lastname','Last Name','required|min_length[3]|trim', array('required' => 'You must provide a %s.'));
      $this->form_validation->set_rules('username','Username','required|min_length[3]|trim', array('required' => 'You must provide a %s.'));
      $this->form_validation->set_rules('email','Email','required|trim|valid_email', array('required' => 'You must provide a %s.'));
      $this->form_validation->set_rules('password','Password','required|min_length[3]|trim', array('required' => 'You must provide a %s.'));
      if($this->form_validation->run() == false){
        $data['main_content'] = 'register_view';
        $this->load->view('layouts/main',$data);
      }else{
          if($this->Users_model->register()){
              $this->session->set_flashdata('registred','Account Created');
              redirect('products');
          }
      }

    }
    public function login(){
         $this->form_validation->set_rules('email','Email','required|trim|valid_email');
         $this->form_validation->set_rules('password','Password','required|min_length[5]|trim');
         $email = $this->input->post('email');
         $passe = md5($this->input->post('password'));
         $user = $this->Users_model->login($email,$passe);
         if($user != null){
            $user_data = array(
                'id'=>$user->id,
                'email'=>$user->email,
                'logged'=>true
            );
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('logged','Logged in');
            redirect('products');
         }else{
            $this->session->set_flashdata('fail','Invalid credentials'); 
            redirect('products');
         }
    }
    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('logged');
        redirect('cart/cancel_cart');
     }
}



?>
