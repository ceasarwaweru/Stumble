<?php

class post extends CI_Controller {
public function index_user()
{
$this->load->view("posts/register.php");
}

public function register_user(){
  
      $user=array(
      'Firstname'=>$this->input->post('Firstname'),
      'Lastname'=>$this->input->post('Lastname'),
      'password'=>md5($this->input->post('password')),
      'DOB'=>$this->input->post('DOB'),
      'Phone'=>$this->input->post('Phone'),
      'Email'=>$this->input->post('Email'),
      'idno'=>$this->input->post('idno')
        );
$email_check=$this->post_model->email_check($user['Email']);

if($email_check){
  $this->post_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('post/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('Post/index_user');


}
}



public function login_view(){

$this->load->view("posts/login");

}


function login_user(){
  $user_login=array(

  'Email'=>$this->input->post('Email'),
  'password'=>md5($this->input->post('password'))

    );


    $data['post'] = $this->post_model->login_user($user_login['Email'],$user_login['password']);
      if($data['post']=== null)
      {
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("post/login.php");
      }
      else{
        
       
        $this->session->set_userdata('customer_id',$data['post']['customer_id']);
        $this->session->set_userdata('Email',$data['post']['Email']);
        $this->session->set_userdata('Firstname',$data['post']['Firstname']);
        $this->session->set_userdata('idno',$data['post']['idno']);
        $this->session->set_userdata('Lastname',$data['post']['Lastname']);
        
        redirect('Posts/index');

/*        $user_id=$this->session->userdata('customer_id');
        //print_r($data['post']['customer_id']);
        //$this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');*/

      }


}
}