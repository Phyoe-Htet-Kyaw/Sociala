<?php
    include_once "include/header.php";

    $task = new Post;
    if($task->validate($_GET)){
        $res = $task->edit($_GET['id']); 
    }else{
        echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
    }

    if($task->update($_GET, $_POST, $_FILES)){
        echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
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
              <label>Edit Post</label>
            </div>
            <form action="" method="post" enctype="multipart/form-data">                  
              <div class="col-12">
                  <div class="form-group">
                  <textarea name="description" class="form-control" rows="5" placeholder="Enter Post Description"><?php echo $res->description; ?></textarea>
                  </div>
              </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="user">User</label>
                        <select name="user" id="user" class="form-control">
                            <option value="<?php echo $res->id; ?>"><?php echo $res->first_name; ?> <?php echo $res->last_name; ?></option>
                        </select>
                    </div>  
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Photo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Video</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="video" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose Video</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">                  
                    <div class="form-group">
                        <a href="post_index.php"><button type="button" name="back" class="btn btn-primary">Back</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
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