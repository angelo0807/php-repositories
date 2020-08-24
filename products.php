<?php
class products extends CI-controller{
    public function index () {
        //ALL PRODUCTS
        $data['products'] = $this->Product_model->get_products();


        //LOAD VIEW
        $data ['main_content'] ='prodcuts';
        $this->load->view('layouts/main',$data);

    }
}