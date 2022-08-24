<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $barang = $this->main_model->get_data('barang')->result();

        $data = array(
            "data_barang"=>$barang,
        );
        $this->load->view('header');
        $this->load->view('list_stok',$data);
        $this->load->view('footer');
    }

    public function add_action(){
        $post = $this->input->post();
      
           $this->db->query("UPDATE barang set qty=qty+".$post['qty']." where  id=".$post['id_barang']);
            $this->session->set_flashdata('msg','swal("Sukses!", "Stok barang berhasil ditambah!", "success");');
            redirect('barang','refresh');
       
    }    
}


/* End of file Barang.php */



?>