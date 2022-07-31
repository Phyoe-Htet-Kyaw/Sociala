<?php
    include_once "include/header.php";

    $country = new Country;
    if($country->validate($_GET)){
        $res = $country->edit($_GET['id']); 
    }else{
        echo "<script>window.location.href='/Sociala/master/country_index.php'</script>";
    }

    if($country->update($_GET, $_POST)){
      echo "<script>window.location.href='/Sociala/master/country_index.php'</script>";
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
                <div class="form-group">
                    <label>Edit Country</label>
                </div>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="country" class="form-control" value="<?php echo $res->name; ?>">
                    </div>
                    <div class="form-group">
                        <a href="country_index.php"><button type="button" class="btn btn-primary btn-sm">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> 
                    </div>     
                </form>
            </div>
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