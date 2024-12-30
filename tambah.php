<?php 
require 'function.php';

if (isset($_POST['submit'])) {

    global $conn;
    $todo_list = $_POST["todo_list"];
   
    $sql =  "INSERT INTO todo (todo_list) VALUE ('$todo_list')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php');
    }
   
    
}

?>  