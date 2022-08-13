<?php include 'connect.php';
$stmt=$conn->prepare("SELECT * FROM tasks");
$stmt->execute();
$tasks = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.2-web/css/all.min.css">
    <style>
        .task{
            border-left:10px solid grey;
            border-right:10px solid grey;
        }
        .Completed{
          border-color:#4CBB17;
        }
    </style>
  </head>
  <body>
    <h1 class = "text-center">All tasks</h1>
    <div class = "container">
        <?php foreach($tasks as $task){?>
        <div class="task shadow rounded-4 py-3 my-5 position-relative  <?php if($task['State'] == 1){echo 'Completed';} ?>"> 
            <h2><?= $task['Name']?></h2>
            <p><?= $task['Content']?></p>
            <div class="position-absolute end-0 top-50 px-2">
              <a href="Completed.php?Id=<?= $task['Id']?>&State=<?= $task['State']?>">
                <i class="fa-solid fa-check fa-2x"></i>
              </a>
              <i class="fa-solid fa-edit fa-2x"></i>
              <a href="delete.php?Id=<?=$task['Id']?>">
                <i class="fa-solid fa-trash fa-2x"></i>
              </a>
            </div>
        </div>
        <?php }?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>