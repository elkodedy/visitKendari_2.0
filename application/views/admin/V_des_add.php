
    <!-- Right Panel -->

    <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="row m-0">
          <div class="col-sm-4">
            <div class="page-header float-left">
              <div class="page-title">
                <h1>Dashboard</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Table</a></li>
                  <li class="active">Data table</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">Add Form</div>
                  <div class="card-body card-block row justify-content-center">
                    <div class="col-9">
                      <h3>Add Destination</h3>

                      <form action="<?php echo base_url('admin/destination/add')?>" method="post" class="">
                          <div class="form-group">
                              <div class="input-group">
                                  <input type="text" id="username2" name="des_name" placeholder="Destination Name" class="form-control" value="" required>
                                  <div class="input-group-addon"><i class="fa fa-home"></i></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group">
                                  <input type="text" id="email2" name="des_tagg" placeholder="Tag" class="form-control" value="">
                                  <div class="input-group-addon"><i class="fa fa-tags"></i></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group">
                                  <input type="text" id="email2" name="des_cost" placeholder="Cost" class="form-control" value="">
                                  <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group">
                                  <input type="text" id="email2" name="des_photo" placeholder="Photo" class="form-control" value="">
                                  <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="input-group">
                                  <textarea name="des_info" id="" rows="10" class="form-control" placeholder="Info" value=""></textarea>
                              </div>
                          </div>
                          <div class="form-actions form-group float-right">
                            <button onclick="window.location.href='<?php echo base_url('admin/destination');?>'" type="button" class="btn btn-secondary btn-sm" >Back</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                          </div>
                      </form>
                    </div>
                  </div>
              </div>
          </div>

        </div>
      </div><!-- .animated -->
    </div><!-- .content -->
