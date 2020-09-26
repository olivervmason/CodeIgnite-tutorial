<?php
    class Pages extends CI_Controller {
        public function view($page = 'home')
        {
            // Error if path does not exist:
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    show_404();
            }

            // Create data array:
            $data['title'] = ucfirst($page);

            // Load pages:
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);

        }
    }
