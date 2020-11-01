<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends CI_Controller
{
    public function index()
    {
        
    }

    public function add()
    {
        
    }

    public function setting()
    {
        $this->load->view('setting_view');
        $this->load->view('header_view.php');
    }

}

?>
