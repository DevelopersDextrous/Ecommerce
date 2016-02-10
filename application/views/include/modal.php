<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3>Login</h3>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/login/validate" class="form-horizontal" method="post">
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Login">

      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
