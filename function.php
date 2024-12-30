<?php 
$conn = mysqli_connect("localhost", "root", "", "todolist");

if(!$conn){
    echo 'not connected' . mysqli_connect_error;
}

function queri($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $conn;
    $query = "DELETE FROM todo WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($ubah) {
    global $conn;
    $id = $_GET['id'];
    $todo_list = $ubah["todo_list"];
    
    $query = "UPDATE todo SET todo_list = '$todo_list' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>