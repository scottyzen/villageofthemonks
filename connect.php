<?php include 'uploads.php'; ?>
<?php include '_header.php'; ?>

  <div class="wrapper">
    <!-- Header Image -->
    <div class="header">
      <div class="container">
        <div class="row">

          <!-- Navigation -->
          <?php include '_navigation.php'; ?>

        </div>
      </div>
    </div>
    <br>

    <!-- Display images that have been uploaded -->
    <?php

      $db = mysqli_connect("mysql2269int.cp.blacknight.com","u1204067_scott","fUyp<a+Byh1D>(IK","db1204067_villageofthemonks");
      $sql = "SELECT * FROM  `uploads` LIMIT 0 , 30";
      $result = mysqli_query($db, $sql);
      echo '<div class="show-uploads">';
      while ($row = mysqli_fetch_array($result)) {
        echo '<div id="">';
          echo '<img src="uploads/'.$row['image'].'">';
          echo '<span>'.$row['name'].'</span>';
          echo '<p>'.$row['text'].'</p>';
        echo '</div>';
      }
      echo '</div>'

    ?>

    <hr>

    <div class="container">
      <div class="row upload-form">
        <!-- Image upload form -->
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
          <div class="form-group">
            <input type="file" name="image">
          </div>
          <div class="form-group">
            <input type="text" name="name" value="Name (Optional)">
          </div>
          <div class="form-group">
            <textarea name="text" rows="8" cols="80" placeholder="Some info about your image"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="upload" value="Upload Image">
          </div>
        </form>
      </div>
    </div>




  </div><!-- End of wrapper -->

<?php include '_footer.php'; ?>
