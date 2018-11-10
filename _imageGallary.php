<?php
function gallery($tagName) {

    $whitelist = array(
        '127.0.0.1',
        '::1'
    );

    // Check if running on development server
    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        echo "Development server. Boom!";
    } else {
        $db = mysqli_connect("mysql2269int.cp.blacknight.com","u1204067_scott","fUyp<a+Byh1D>(IK","db1204067_villageofthemonks");
        $sql = "SELECT * FROM  `uploads` LIMIT 0 , 90";
        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_array($result)) {
            // Check if image is has been varifided
            if ($row['tag'] == $tagName) {
            echo '<li>';
                echo '<a>';
                echo '<img src="uploads/'.$row['image'].'" alt="'.$row['text'].'" user="'.$row['name'].'">';
                echo '</a>';
            echo '</li>';
            }
        }
    }
};

function imageUploadForm($formName){

echo '<div class="upload-form">

  <form action="" method="POST" enctype="multipart/form-data">

    <span class="section-title full-width">
      <h1 class="display-3">Upload Image</h1>
    </span>

    <!-- Brandon -->
    <input type="hidden" name="tag" value="'.$formName.'">

    <!-- File -->
    <label for="image" class="fileContainer">
        <p></p>
        <input  type="file" name="image" accept="image/*"/ required/>
        <span>Select a File</span>
    </label>

    <!-- Image Info -->
      <textarea name="text" placeholder="Some info about your image"></textarea>

    <!-- Name -->
    <input type="text" name="name" placeholder="Your name">

    <!-- Buttons -->
    <div class="form-group-buttons">
      <!-- Upload Image -->
      <button type="submit" name="upload"><i class="fa fa-upload" aria-hidden="true"></i> Upload image</button>
    </div>

    <!-- Cancel Upload -->
    <button type="reset" id="cancel" name="upload"><i class="fa fa-times" aria-hidden="true"></i></button>
  </form>

</div>';


};
?>
