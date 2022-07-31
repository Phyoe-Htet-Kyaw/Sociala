<?php
    include_once "include/header.php";  
?>

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
              <label>Add New City</label>
            </div>
            <?php
              $city = new City;
              if($city->add($_POST)){
                echo "<script>window.location.href='/Sociala/master/city_index.php'</script>";
              }
            ?>
            <form action="" method="post">                  
                <label>City Name</label>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="Enter City Name">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="country">Choose Country</label>
                        <select name="country" id="country" class="form-control">
                            <?php
                                $country = new Country;
                                $country_data = $country->show();

                                foreach($country_data as $item){
                            ?>
                                <option value="<?php echo $item->id; ?>"> <?php echo $item->name; ?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>  
                </div>
                <div class="col-12">                  
                    <div class="form-group">
                        <a href="city_index.php"><button type="button" name="back" class="btn btn-primary">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>   
                </div>
            </form>
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

<?php include_once "include/footer.php"; ?>