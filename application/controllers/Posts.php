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
            
            if (empty($data['post'])){
                show_404();
            }

            $data['title'] = $data['post']['title'];
            // print_r($data['title']); 

            $this->load->view('templates/header', $data);
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer', $data);
        }

        public function create(){
            $data['title'] = "Create Post";

            // Validation from CodeIgnite libraries enabled in config->autoload.php;
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');

            // Load form whilst validation criteria not met...
            if($this->form_validation->run() === false){
                $this->load->view('templates/header', $data);
                $this->load->view('pages/create', $data);
                $this->load->view('templates/footer', $data);
            } else {
            // when criteria met, create post and redirect back to main posts page;
                $this->post_model->create_post();
                redirect('posts');
            }
        }
    }