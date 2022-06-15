<?php
/**
 *
 */
class Cart extends CI_Controller
{
    public function index(){
        $data['main_content'] = 'cart_view';
        $this->load->view('layouts/main',$data);
    }
    public function add(){
        $data = array(
            'id'      => $this->input->post("item_number"),
            'qty'     => $this->input->post("qty"),
            'price'   => $this->input->post("price"),
            'name'    => $this->input->post("title"),
        );
        $this->cart->insert($data);
        $this->db->query("UPDATE products SET sold = sold + 1 WHERE id=".$this->input->post("item_number"));
        //print_r($data);
        redirect("products");
    }
    public function update($cart = null){
        $data = $_POST;
        $this->cart->update($data);
        //print_r($data);
        redirect("products");
    }
    public function cancel_cart(){
        $this->cart->destroy();
        redirect("products");
    }
}
?>