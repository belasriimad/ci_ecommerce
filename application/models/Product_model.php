<?php

/**
 *
 */
class Product_model extends CI_model
{
  public function get_products(){
      $this->db->select('*');
      $this->db->from('products');
      $query = $this->db->get();
      return $query->result();
  }
  public function get_product_details($id){
      $this->db->where(array('id'=>$id));
      $query = $this->db->get('products');
      return $query->row();
  }
  public function get_categories(){
      $this->db->select('*');
      $this->db->from('categories');
      $query = $this->db->get();
      return $query->result();
  }
  public function get_product_by_category($id){
      $this->db->where(array('categorie_id'=>$id));
      $query = $this->db->get('products');
      return $query->result();
  }
  public function get_popular(){
      $this->db->select('*');
      $this->db->from('products');
      $this->db->order_by('sold','desc');
      $query = $this->db->get();
      return $query->result();
  }
}

 ?>
