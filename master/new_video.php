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
              <label>Add New Video</label>
            </div>
            <?php
              $video = new Video;
              if($video->add($_POST, $_FILES)){
                echo "<script>window.location.href='/Sociala/master/video_index.php'</script>";
              }
            ?>
            <form action="" method="post" enctype="multipart/form-data">                  
                <div class="col-3">
                    <div class="form-group">
                        <label for="post">Choose Post</label>
                        <select name="post" id="post" class="form-control">
                            <?php
                                $post = new Post;
                                $post_data = $post->show();
                                foreach($post_data as $item){
                            ?>
                                <option value="<?php echo $item->id; ?>"><?php echo $item->id; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>  
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputFile">video</label>
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
                        <a href="video_index.php"><button type="button" name="back" class="btn btn-primary">Back</button></a>
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