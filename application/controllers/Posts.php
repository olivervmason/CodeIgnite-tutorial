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

            $data['categories'] = $this->post_model->get_categories();

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

        public function delete($id){
            // echo $id;        // Log on to posts/delete/$id to check function is executing;
            $this->post_model->delete_post($id);    // Calls delete post method in Post Model;
            redirect('posts');
        }

        public function edit($slug){
            $data['post'] = $this->post_model->get_posts($slug);

            if(empty($data['post'])){
                show_404();
            }

            $data['title'] = 'Edit Post';

            $this->load->view('templates/header');
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->post_model->update_post();

			// Set message
			// $this->session->set_flashdata('post_updated', 'Your post has been updated');

			redirect('posts');
        }
    }