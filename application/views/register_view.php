<div class="container">
     <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default panel-left">
              <div class="panel-heading panel-heading-green"><h3 class="panel-title">Register</h3></div>
              <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                        <form action="<?php echo base_url()?>users/register" method="post" class="">
                          <div class="form-group">
                            <label for="firstname">First Name*</label>
                            <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" 
                            placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="lastname">Last Name*</label>
                            <input type="text" class="form-control" name="lastname" 
                            id="exampleInputEmail1" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="username">Username*</label>
                            <input type="text" class="form-control" name="username" 
                              id="exampleInputEmail1" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" name="email" 
                              id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" class="form-control" name="password" 
                              id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-info">Inscription</button>
                        </form>
                    </div>
