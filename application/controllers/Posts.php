<?php
    class Posts extends CI_Controller {
        public function index() {
            $data['title'] = 'Latest posts';
            $data['posts'] = $this->post_model->get_posts();

            //Test data loading - this will appear above header:
            // print_r($data);

            // Load pages:
            $this->load->view('templates/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer', $data);

        }

        public function view($slug = null){
            $data['post'] = $this->post_model->get_posts($slug);     
            
            // if (empty($data['post'])){
            //     show_404();
            // }

            // $data['title'] = $data['post']['title'];
            // $data['body'] = $data['post']['body'];
            print_r($data['post']); 

            $this->load->view('templates/header', $data);
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer', $data);
        }
    }