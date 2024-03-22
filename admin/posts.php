<?php
  if(isset($_POST["create"])) {
    session_start();
    $user_id = $_SESSION['user_id'];
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlInsert = "INSERT INTO posts (date, title, summary, content, user_id) VALUES ('$date', '$title', '$summary', '$content', '$user_id')";
    if (mysqli_query($conn, $sqlInsert)) {
      session_start();
      $_SESSION["create"] = "Post added successfully";
      header("Location: posts_list.php");
    } else {
      die("Data is not inserted!");
    }
  }


  if(isset($_POST["update"])) {
    session_start();
    $user_id = $_SESSION['user_id'];
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE posts SET title='$title', summary='$summary', content='$content', date='$date' WHERE id='$id' AND user_id = '{$_SESSION['user_id']}'";
    if (mysqli_query($conn, $sqlUpdate)) {
      session_start();
      $_SESSION["update"] = "Post updated successfully";
      header("Location: posts_list.php");
    } else {
      die("Data is not updated!");
    }
  }
?>