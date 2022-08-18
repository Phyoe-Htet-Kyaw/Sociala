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
              <label>Add New Post</label>
            </div>
            <?php
              $post = new Post;
              if($post->add($_POST, $_FILES)){
                echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
              }
            ?>
            <form action="" method="post" enctype="multipart/form-data">                  
              <div class="col-12">
                  <div class="form-group">
                  <textarea name="description" class="form-control" rows="5" placeholder="Enter Post Description"></textarea>
                  </div>
              </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="user">Choose user</label>
                        <select name="user" id="user" class="form-control">
                            <?php
                                $user = new User;
                                $user_data = $user->show();
                                foreach($user_data as $item){
                            ?>
                                <option value="<?php echo $item->id; ?>"> <?php echo $item->first_name; ?> <?php echo $item->last_name; ?></option>
                            <?php
                                }
                            ?>
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