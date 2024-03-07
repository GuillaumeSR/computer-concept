<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Computer Concept</title>
</head>
<body>
<header>
<nav class="navbar bg-body-tertiary">
  <!-- <div class="container"> -->
        <img class="logo" src="../assets/img/logo.avif" alt="Logo">
  <!-- </div> -->
  </nav>
</header>
<main>
  <?php require '../src/controllers/' . $route . '_controller.php'; ?>
</main>
<footer>
<p>&copy; 2024 FastCrous. All rights reserved.</p>
</footer>
</body>
</html>