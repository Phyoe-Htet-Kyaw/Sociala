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
                <div class="form-group">
                  <a href="new_city.php"><button class="btn btn-primary">Add New City</button></a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>City</th>
                      <th>Country</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $city = new City;
                      $city_data = $city->show();
                      $i = 1;
                      foreach($city_data as $item){
                    ?>
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $item->name; ?></td>
                      <td><?php echo $item->country; ?></td>
                      <td>
                        <a href="city_edit.php?id=<?php echo $item->id; ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="city_delete.php?id=<?php echo $item->id; ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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