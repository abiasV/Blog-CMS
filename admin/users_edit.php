<?php include("templates/header.php"); ?>

<?php
    $id = $_GET['id'];
    if($id) {
        include("../connect.php");
        $sqlEdit = "SELECT * FROM users WHERE user_id = $id";
        $result = mysqli_query($conn, $sqlEdit);
    }else {
        header( 'Location: users_list.php' );
        die();
    }
?>

    <div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
      <form action="users.php" method="post">
        <?php
          while($data = mysqli_fetch_array($result)) {
        ?>
        
        <div class="form-field mb-4">
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['username']; ?>" placeholder="Enter username:">
        </div>
        <div class="form-field mb-4">
        <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email']; ?>" placeholder="Enter email:">
        </div>
        <div class="form-field mb-4">
        <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" >
        </div>
        <div class="form-field mb-4">
            <label for="role">Role</label>
            <?php
            $values = array( 'admin', 'user' );
            
            echo '<select name="role" id="role">';
            foreach( $values as $key => $value )
            {
                echo '<option value="'.$value.'"';
                if( $value == $data['role'] ) echo ' selected="selected"';
                echo '>'.$value.'</option>';
            }
            echo '</select>';
            ?>
        </div>
    
        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
        <div class="form-field">
            <input type="submit" class="btn btn-primary" value="Submit" name="update">
        </div>

        <?php
        }
        ?>
      </form>
    </div>

<?php include("templates/footer.php"); ?>