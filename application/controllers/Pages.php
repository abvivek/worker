<?php

class Pages extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function view($page = 'login') {
        if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view($page);
        $this->load->view('templates/footer');
    }

}
