<?php
    if(isset($_POST['create'])) {
        include("../connect.php");
        if( $_POST['username'] and $_POST['email'] and $_POST['password']  and $_POST['role'] ) {
            
            $query = 'INSERT INTO users (
                username,
                email,
                password,
                role
            ) VALUES (
                "'.mysqli_real_escape_string( $conn, $_POST['username'] ).'",
                "'.mysqli_real_escape_string( $conn, $_POST['email'] ).'",
                "'.md5( $_POST['password'] ).'",
                "'.$_POST['role'].'"
            )';
            
            mysqli_query( $conn, $query );
            session_start();
            $_SESSION["create"] = 'User has been updated';
        }

        header( 'Location: users_list.php' );
        die();
    }

    if(isset($_POST['update'])) {
        include("../connect.php");
        if( $_POST['username'] and $_POST['email']) {
            
            $query = 'UPDATE users SET
                username = "'.mysqli_real_escape_string($conn, $_POST['username']).'",
                email = "'.mysqli_real_escape_string($conn, $_POST['email']).'",
                role = "'.$_POST['role'].'"
                WHERE user_id = "'.$_POST['user_id'].'"
                LIMIT 1';
            mysqli_query( $conn, $query );
            
            if( $_POST['password'] ){
                $query = 'UPDATE users SET
                    password = "'.md5( $_POST['password'] ).'"
                    WHERE user_id = '.$_POST['user_id'].'
                    LIMIT 1';
                mysqli_query( $conn, $query );
            }
            session_start();
            $_SESSION["update"] = 'User has been updated';
        }

        header( 'Location: users_list.php' );
        die();
    
    }
?>