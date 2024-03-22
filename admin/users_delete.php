<?php
$id = $_GET['id'];
if($id) {
    include("../connect.php");
    session_start();
    $postsDelete = "DELETE FROM posts WHERE user_id = $id";

    mysqli_query($conn, $postsDelete);

    $userDelete = "DELETE FROM users WHERE user_id = $id";
    
    if(mysqli_query($conn, $userDelete)) {
        $_SESSION["delete"] = "User deleted successfully";
        if($_SESSION['user_id'] != $id){
            header("Location: users_list.php");
        } else{
            header("Location: logout.php");
        }
    } else {
        die("Something is not write. Data is not deleted");
    }

}else {
  echo "Post not found";
}

?>