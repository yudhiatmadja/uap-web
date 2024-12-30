<?php 
require 'function.php';
$id = $_GET['id'];
$td = queri("select * from todo where id = $id")[0];
if(isset($_POST['submit'])){
    if (update($_POST) > 0) {
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="" method="post">
    <label for="todo_list">update task</label>
    <input id="todo_list" type="text" name="todo_list">
    <button type="submit" name="submit">edit task</button>
</form>
</body>
</html>