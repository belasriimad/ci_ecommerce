<?php if($this->session->flashdata('registred')):?>
  <div class="alert alert-success">
      <?php echo $this->session->flashdata('registred');?>
  </div>
<?php endif;?>
<?php if($this->session->flashdata('logged')):?>
  <div class="alert alert-success">
      <?php echo $this->session->flashdata('logged');?>
  </div>
<?php endif;?>
<?php if($this->session->flashdata('fail')):?>
  <div class="alert alert-danger">
      <?php echo $this->session->flashdata('fail');?>
  </div>
<?php endif;?>
<?php if($this->session->flashdata('registred'))
    unset($_SESSION['registred']);
?>
<?php if($this->session->flashdata('logged'))
    unset($_SESSION['logged']);
?>
<?php if($this->session->flashdata('fail'))
    unset($_SESSION['fail']);
?>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php $this->load->view('layouts/includes/sidebar');?>
            </div>
            <div class="col-md-8">
            <div class="panel panel-default panel-left">
              <div class="panel-heading panel-heading-green"><h3 class="panel-title">Latest Products</h3></div>
              <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                        <?php foreach ($products as $product):?>
                        <div class="col-md-4 game">
                            <div class="game-price">
                                <?php echo $product->prix.''.'$';?>
                            </div>
                            <a href="<?php echo base_url();?>products/details/<?php echo $product->id;?>">
                            <img src="<?php echo base_url();?>assets/images/<?php echo $product->image;?>" width="200" height="200" alt=""></a>
                            <div class="game-title"><?php echo $product->titre;?></div>
                            <div class="game-add">
                                <form class="" action="<?php echo base_url();?>cart/add" method="post">
                                    Qty:<input type="text" name="qty" value="1" class="qty">
                                    <input type="hidden" name="item_number" value="<?php echo $product->id;?>">
                                    <input type="hidden" name="price" value="<?php echo $product->prix;?>">
                                    <input type="hidden" name="title" value="<?php echo $product->titre;?>"><br>
                                    <button type="submit" name="button" class="btn btn-info">Add to cart</button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach;?>
                       </div>
