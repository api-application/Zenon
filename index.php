<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zenon Dashboard</title>
</head> 
<body>
    <?php if (empty($_SESSION['user'])) : ?>
    <form action="login.php" method="post">
      <input type="text" name="login" /> 
      <br/> 
      <input type="password" name="password" />
      <br/>
      <button type="submit">log in</button>
    </form>
    <?php else : ?>
        <p>Hi, <?=$_SESSION['user']?></p>
        <a href="logout.php">logout</a>
    <?php endif; ?>
</body>
</html>
