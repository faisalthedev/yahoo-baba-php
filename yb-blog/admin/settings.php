<?php
include 'header.php';
include 'config.php';
?>

<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="admin-heading">Website Settings</h1>
      </div>
      <div class="col-md-offset-3 col-md-6">
        <?php
        $sql = "SELECT * FROM settings";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");

        if (mysqli_num_rows($result) > 0) :
          while ($row = mysqli_fetch_assoc($result)) : ?>
            <!-- Form -->
            <form action="save-settings.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="website_name">Website Name</label>
                <input type="text" name="site_title" class="form-control" value="<?php echo $row['site_title']; ?>">
              </div>
              <div class="form-group">
                <label for="logo">Website Logo</label>
                <input type="file" name="site_logo" class="form-control-file">
                <img src="images/<?php echo $row['site_logo']; ?>" alt="<?php echo $row['site_title']; ?>">
                <input type="hidden" name="old_logo" value="<?php echo $row['site_logo']; ?>">
              </div>
              <div class="form-group">
                <label for="footer_desc">Footer Description</label>
                <textarea name="footer_desc" cols="30" rows="5" class="form-control">
                  <?php echo $row['footer_desc']; ?>
                </textarea>
              </div>

              <input type="submit" name="submit" class="btn btn-primary" value="Update">
            </form>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php
//
?>