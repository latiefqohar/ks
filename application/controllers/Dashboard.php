<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }
    

    public function index()
    {
        $po = $this->db->query("SELECT * FROM po")->result();
        $data = array(
            "data_po"=>$po
        );
        
        $this->load->view('header');
        $this->load->view('dashboard',$data);
        $this->load->view('footer');
    }

}

/* End of file Dashboard.php */



?>