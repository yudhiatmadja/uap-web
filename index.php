

<?php 
require 'function.php';
$todo = queri("select * from todo");
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List - UAP WEB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <h1>
    TAUFIQURRAHMAN YUDHI ATMADJA

    </h1><br>
    <h1>
202210370311066

    </h1>
    <div class="container">
      <form action="tambah.php" method="post">
        <div id="new-task">
          <input type="text" name="todo_list" placeholder="Enter The Task Here..." />
          <button id="push" name="submit" type="submit">Add</button>
        </div>
      </form>
      <div id="tasks" style="display: inline-block">
        <?php 
        foreach($todo as $td){
        ?>
        <div class="task" id="0">
          <span id="taskname"><?php echo $td['todo_list']; ?></span>
          <a class="edit" style="visibility: visible" href="update.php?id=<?=$td['id'];?>">
            <i class="fa-solid fa-pen-to-square"></i>
          </a>
          <a class="delete" href="hapus.php?id=<?=$td['id']?>">
            <i class="fa-solid fa-trash"></i>
          </a>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </body>
</html>