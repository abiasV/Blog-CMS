<?php include("templates/header.php"); ?>
    <div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
        <form action="users.php" method="post">
            
            <div class="form-field mb-4">
                <label for="username">User Name</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username:">
            </div>
            <div class="form-field mb-4">
            <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email:">
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
                        echo '<option value="'.$value.'">'.$value.'</option>';
                    }
                    echo '</select>';
                ?>
            </div>
        
            <div class="form-field">
                <input type="submit" class="btn btn-primary" value="Submit" name="create">
            </div>

        </form>
    </div>
<?php include("templates/footer.php"); ?>