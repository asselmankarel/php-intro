<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php intro</title>
</head>

<body>


  <?php foreach ($tasks as $task) : ?>
    <ul>
      <li><?= $task->description ?></li>
      <li><?= $task->isCompleted() ? '&#9989' : 'incomplete' ?></li>
    </ul>
  <?php endforeach; ?>


</body>

</html>