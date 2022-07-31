<?php
  include_once "include/header.php";

  $city = new City;
  if($city->validate($_GET)){
      $res = $city->edit($_GET['id']); 
  }else{
    echo "<script>window.location.href='/Sociala/master/city_index.php'</script>";
  }

  if($city->update($_GET, $_POST)){
    echo "<script>window.location.href='/Sociala/master/city_index.php'</script>";
  }
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
            <form action="" method="post">
                <div class="row">
                    <div class="col-12">
                    <label>EDIT CITY INFORMATIONS</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" value="<?php echo $res->name; ?>">
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
                                    <option value="<?php echo $item->id; ?>" <?php if($item->id == $res->country_id) echo "selected"; ?>><?php echo $item->name; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                          <a href="city_index.php"><button type="button" class="btn btn-primary btn-sm">Back</button></a>
                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
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