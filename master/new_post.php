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
              if($post->add($_POST)){
                echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
              }
            ?>
            <form action="" method="post">                  
                <div class="col-3">
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
                <div class="col-12">
                    <div class="form-group">
                    <textarea name="description" class="form-control" rows="5" placeholder="Enter Post Description"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="post_type">Choose Post Type</label>
                        <select name="post_type" id="post_type" class="form-control">
                            <option value="1">Text</option>
                            <option value="2">Photo</option>
                            <option value="3">Video</option>
                        </select>
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