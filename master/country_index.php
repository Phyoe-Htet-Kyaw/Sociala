<?php include_once "include/header.php"; ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                  $country = new Country;
                  $country->add($_POST);
                ?>
                <form action="" method="post">
                  <div class="row">
                    <div class="col-12">
                      <label>Country Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-11">
                      <div class="form-group">
                        <input type="text" name="country" class="form-control" placeholder="Enter Country Name">
                      </div>
                    </div>
                    <div class="col-1">
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                      </div>
                    </div>
                  </div>
                </form>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $country_data = $country->show();
                        $i = 1;
                        foreach($country_data as $item){
                    ?>
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $item->name ?></td>
                      <td>
                        <a href="country_edit.php?id=<?php echo $item->id; ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="country_delete.php?id=<?php echo $item->id; ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                      </td>
                    </tr>
                    <?php
                      }                
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
<?php include_once "include/footer.php"; ?>