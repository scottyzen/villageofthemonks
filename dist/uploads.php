<?php
  $msg = "";
  if (isset($_POST['upload'])) {

    // Path to store uploaded image
    $target = 'uploads/';
    $target .= basename($_FILES['image']['name']);

    // Connect to Database
    $db = mysqli_connect("mysql2269int.cp.blacknight.com","u1204067_scott","fUyp<a+Byh1D>(IK","db1204067_villageofthemonks");

    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $text = $_POST['text'];
    $tag = $_POST['tag'];

    $sql = "INSERT INTO uploads (image, name, text, tag) VALUES ('$image', '$name', '$text', '$tag')";
    mysqli_query($db, $sql);

    // Move files into folder
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = 'Image upload successfull';
    } else {
      $msg = 'Error uploading image';
    }

  }

?>