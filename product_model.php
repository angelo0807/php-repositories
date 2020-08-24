<?php
class product_model extends CI_Model{
    //all PRODUCTS


    public function get_products () {
        $this->db->select('*');
        $this->db->from('prodcuts');
        $query = $this->db->get();
        return $query->result();
    }
}
    