<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php intro</title>
</head>

<body>

  <?php require('partials/nav.php'); ?>

  <form action="/names" method="POST">
    <input type="text" name="name" />
    <input type="submit" />
  </form>

  <ul>
    <?php foreach ($users as $user) : ?>
      <li><?= $user['name']; ?></li>
    <?php endforeach; ?>
  </ul>


</body>

</html>