<?php
/**
 * Created by PhpStorm.
 * User: Kim
 * Date: 4/28/14
 * Time: 3:42 PM
 */

class Pages extends CI_Controller{
    public function view($page ='body'){
        if(!file_exists('application/views/pages/' . $page . '.php')){
            show_404();
        }

        $this->load->database();
        $this->load->helper('url');

        $data['title'] = ucfirst($page);

        $sql = $this->db->query("
            SELECT *
            FROM PetOwners");

        $data['query'] = $sql->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function details($id){
        $page = 'details';

        if(!file_exists('application/views/pages/' . $page . '.php')){
            show_404();
        }

        $this->load->database();
        $this->load->helper('url');

        $data['title'] = ucfirst($page);

        $sql = $this->db->query("
            SELECT *
            FROM PetOwners
            WHERE userId = '$id'");

        $data['query'] = $sql->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

}