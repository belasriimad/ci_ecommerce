<div class="container">
     <div class="row">
        <div class="col-md-4">
            <?php $this->load->view('layouts/includes/sidebar');?>
        </div>
        <div class="col-md-8">
        <div class="panel panel-default panel-left">
            <div class="panel-heading panel-heading-dark">
                <h3 class="panel-title">Your Cart</h3>
            </div>
            <div class="panel-body">
                <?php if($this->cart->contents()) :?>
                    <table class="table table-striped">
                        <tr>
                            <th>Qty</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Total</th>
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
                            <td><?php echo $this->cart->format_number($items['price']); ?></td>
                            <td><?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="cart-total label label-danger">Total : <?php echo $this->cart->format_number($this->cart->total()); ?>$</td>
                        </tr>
                    </table>
                <?php endif;?>
            </div>
        </div>
    </div>
</div> <!-- /container -->
