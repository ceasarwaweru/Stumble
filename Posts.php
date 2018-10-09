<?php

  class Posts extends CI_Controller{

    public function index($page = 'home'){
      
      	$data['title'] = 'Latest Pages';

        $data['posts'] = $this->webpage_model->get_posts();

      	$this->load->view('templates/header');
      	$this->load->view('posts/index',$data);
      	$this->load->view('templates/footer');
    }


  }

 ?>
 