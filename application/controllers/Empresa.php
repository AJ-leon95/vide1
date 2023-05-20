<?php 
class Empresa extends CI_Controller{

    function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $this->load->view('header');
        $this->load->view('empresas/index');
        $this->load->view('footer');
    } 
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('empresas/nuevo');
        $this->load->view('footer');
    } 


}





?>