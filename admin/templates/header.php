<?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
<body>
  <div class="dashboard d-flex justify-content-between">
    <div class="sidebar bg-dark vh-100">
      <h1 class="bg-primary p-4"><a href="./index.php" class="text-light text-decoration-none">Dashboard</a></h1>
      <div class="menues p-4 mt-5">
        <ul class="list-unstyled menu d-flex flex-column gap-5">
          <li class="text-light text-decoration-none">
            <strong class="fs-4">Posts</strong>
            <ul class="list-unstyled">
              <li class="ps-2">
                <a href="posts_create.php" class="text-light text-decoration-none">New Post</a>
              </li>
              <li class="ps-2">
                <a href="posts_list.php" class="text-light text-decoration-none">Posts List</a>
              </li>
            </ul>
          </li>
          <li class="text-light text-decoration-none">
            <strong class="fs-4">Users</strong>
            <ul class="list-unstyled">
              <li class="ps-2">
                <a href="users_create.php" class="text-light text-decoration-none">New Users</a>
              </li>
              <li class="ps-2">
                <a href="users_list.php" class="text-light text-decoration-none">Users List</a>
              </li>
            </ul>
          </li>
          <li><a href="../index.php" class="text-light text-decoration-none"><strong class="fs-4">View Posts</strong></a></li>
        </ul>
        <div class="menu mt-5">
          <a href="logout.php" class="btn btn-info">Logout</a>
        </div>
      </div>
    </div>