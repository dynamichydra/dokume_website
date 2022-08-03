<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (!isset($_GET['client'])) {
    header('Location: index.html');
    exit;
  } else if (isset($_GET['client']) && $_GET['client'] == 'company') {
    echo "<script>localStorage.setItem('websiteType', 1);window.location = 'company.php';</script>";
  } else if (isset($_GET['client']) && $_GET['client'] == 'federation') {
    echo "<script>localStorage.setItem('websiteType', 2);window.location = 'federation.php?t=2';</script>";
  }
  ?> 

</body>

</html>