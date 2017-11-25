<section class="content-header">
  <h1>
  Unit
  <small>Create</small>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-10">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">New Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" class="form-horizontal" role="form" action="pages/crud/item/machine.php?action=add">
          <div class="box-body">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Acept!</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>