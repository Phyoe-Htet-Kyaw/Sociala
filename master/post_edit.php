<?php
    include_once "include/header.php";

    $task = new Post;
    if($task->validate($_GET)){
        $res = $task->edit($_GET['id']); 
    }else{
        echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
    }

    if($task->update($_GET, $_POST)){
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
                                <option value="<?php echo $item->id; ?>" <?php if($item->id == $res->user_id) echo "selected"; ?>> <?php echo $item->first_name; ?> <?php echo $item->last_name; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>  
                </div>
                <div class="col-12">
                    <div class="form-group">
                    <textarea name="description" class="form-control" rows="5"><?php echo $res->description; ?></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="post_type">Choose Post Type</label>
                        <select name="post_type" id="post_type" class="form-control">
                            <option value="1" <?php if($res->post_type_id == "text") echo "selected"; ?>>Text</option>
                            <option value="2" <?php if($res->post_type_id == "photo") echo "selected"; ?>>Photo</option>
                            <option value="3" <?php if($res->post_type_id == "video") echo "selected"; ?>>Video</option>
                        </select>
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