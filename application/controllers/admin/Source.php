<?php

if (!defined('BASEPATH'))
    die();

class Source extends CI_Controller {

    public function index() {

        $this->load->view('admin/include/header');
        $this->load->view('admin/upload_source');
        $this->load->view('admin/include/footer');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
