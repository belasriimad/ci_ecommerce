<?php
/**
 *
 */
class Products extends CI_Controller
{
    public function index(){
        $data['products'] = $this->Product_model->get_products();
        $data['main_content'] = 'products_view';
        $this->load->view('layouts/main',$data);
    }
    public function details($id){
       $data['product'] = $this->Product_model->get_product_details($id);
       $data['main_content'] = 'details_product_view';
       $this->load->view('layouts/main',$data);
    }
    public function category($id){
       $data['products'] = $this->Product_model->get_product_by_category($id);
       $data['main_content'] = 'category_view';
       $this->load->view('layouts/main',$data);
    }
}


 ?>
