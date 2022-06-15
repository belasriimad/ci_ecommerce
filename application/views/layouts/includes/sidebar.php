<div class="block-cart">
    <form action="cart/update" method="post">
        <table cellspacing="1" cellpadding="6" style="width:100%" border="0" >
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th style="text-align:right">Price</th>
              <th style="text-align:right">Total</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $items): ?>
            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
             <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?></td>
                <td>
                    <?php echo $items['name']; ?>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                        <p>
                          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                              <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                          <?php endforeach; ?>
                        </p>
                    <?php endif; ?>
                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['subtotal']); ?></td>
              </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
              <td class="right">Total</td>
              <th class="right" style="text-align:right"><?php echo $this->cart->format_number($this->cart->total()); ?>$</td>
            </tr>
        </table>
        <br>
        <p><button class="btn btn-info" type="submit">Update cart</button>
        <a class="btn btn-default" href="<?php echo base_url();?>cart">My Cart</a></p>
    </form>
</div>
<div class="panel panel-default panel-left">
  <div class="panel-heading panel-heading-dark">Categories</div>
  <div class="panel-body">
    <ul class="list-group">
       <?php foreach(get_categories_h() as $category):?>
          <li class="list-group-item"><a href="<?php echo base_url();?>products/category/<?php echo $category->id;?>"><?php echo $category->name;?></a></li>
       <?php endforeach;?>
    </ul>
  </div>
</div>
<div class="panel panel-default panel-left">
  <div class="panel-heading panel-heading-dark">Hot Deals</div>
  <div class="panel-body">
    <ul class="list-group">
      <?php foreach(get_popular_h() as $popular):?>
         <li class="list-group-item"><a href="<?php echo base_url();?>/products/details/<?php echo $popular->id;?>"><?php echo $popular->titre;?></a></li>
      <?php endforeach;?>
    </ul>
  </div>
</div>
