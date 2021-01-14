
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
    <?php
    if($this->session->flashdata('alert')){
        $message = $this->session->flashdata('alert');
        echo "<script type='text/javascript'>alert('$message');</script>";
    }?>
    <div class="content">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">Data Table</strong>
              </div>

              <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <!-- <th>Tag</th> -->
                      <th>Cost</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($gui as $row){ ?>
                    <tr>
                      <td><?php echo $row->guide_name ?></td>
                      <!-- <td><?php echo $row->guide_tag ?></td> -->
                      <td><?php echo $row->guide_cost ?></td>
                      <td><?php echo $row->guide_photo ?></td>
                      <td width="10%" class="text-center">
                        <div>
                          <a class="btn btn-warning" href="<?php echo site_url("admin/guide/go_edit?id=".$row->guide_id."")?>"><abbr title='Edit'><i class='fa fa-edit'></i></abbr></a>
                          <a class="btn btn-danger" href="<?php echo site_url("admin/guide/go_delete?id=".$row->guide_id."")?>"><abbr title='Edit'><i class='fa fa-trash-o'></i></abbr></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="float-right p-3">
                  <a class="btn btn-primary" href="<?php echo site_url("admin/guide/go_add")?>"><abbr title='Add'><i class='fa fa-plus-circle'></i></abbr> Add</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div><!-- .animated -->
    </div><!-- .content -->
