<div class="container">
     <div class="container">
     <div class="row">
          <div class="col-md-4">
              <?php $this->load->view('layouts/includes/sidebar');?>
          </div>
          <div class="col-md-8">
            <div class="panel panel-default panel-left">
              <div class="panel-heading panel-heading-green">
                <h3 class="panel-title"><?php echo $product->titre;?></h3></div>
              <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row details">
                            <div class="col-md-4 details">
                                <img src="<?php echo base_url();?>assets/images/<?php echo $product->image;?>" class="thumbnail" alt="" width="200" height="200" >
                            </div>
                            <div class="col-md-8">
                                <h3><?php echo $product->titre;?></h3>
                                <div class="details-price">
                                    Price : <?php echo $product->prix." $";?>
                                </div>
                                <div class="details-description">
                                    <p>
                                    <?php echo $product->description;?>
                                    </p>
                                </div>
                                <div class="details-buy">
                                    <form class="" action="<?php echo base_url();?>cart/add" method="post">
                                        Qty:<input type="text" name="qty" value="1" class="qty">
                                        <input type="hidden" name="item_number" value="<?php echo $product->id;?>">
                                        <input type="hidden" name="price" value="<?php echo $product->prix;?>">
                                        <input type="hidden" name="title" value="<?php echo $product->titre;?>"><br>
                                        <button type="submit" name="button" class="btn btn-info">Add cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
