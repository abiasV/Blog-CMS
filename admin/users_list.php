<?php 
include("templates/header.php");
?>

<div class="post-list w-100 p-5">
  <?php
    if(isset($_SESSION["create"])) {
    ?>
      <div class="alert alert-success">
        <?php echo $_SESSION["create"]; ?>
      </div>
    <?php
    unset($_SESSION["create"]);
    } 
  ?>

  <?php
    if(isset($_SESSION["update"])) {
    ?>
      <div class="alert alert-success">
        <?php echo $_SESSION["update"]; ?>
      </div>
    <?php
    unset($_SESSION["update"]);
    } 
  ?>

  <?php
    if(isset($_SESSION["delete"])) {
    ?>
      <div class="alert alert-success">
        <?php echo $_SESSION["delete"]; ?>
      </div>
    <?php
    unset($_SESSION["delete"]);
    } 
  ?>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width:5%;">Num</th>
        <th style="width:15%;">User name</th>
        <th style="width:23%;">Email</th>
        <th style="width:15%;">Role</th>
        <th style="width:15%;">created date</th>
        <th style="width:15%;">update date</th>
        <th style="width:12%;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include("../connect.php");
        $sqlSelect = "SELECT * FROM users";
        $result = mysqli_query($conn, $sqlSelect);
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $data["user_id"] ?></td>
            <td><?php echo $data["username"] ?></td>
            <td><?php echo $data["email"] ?></td>
            <td><?php echo $data["role"] ?></td>
            <td><?php echo $data["created_at"] ?></td>
            <td><?php echo $data["update_at"] ?></td>
            <td>
              <a class="btn btn-warning" href="users_edit.php?id=<?php echo $data["user_id"] ?>">Edit</a>
              <a class="btn btn-danger" href="users_delete.php?id=<?php echo $data["user_id"] ?>">Delete</a>
            </td>
          </tr>
        <?php
        }
      ?>
    </tbody>
  </table>
</div>



<?php 
include("templates/footer.php");
?>