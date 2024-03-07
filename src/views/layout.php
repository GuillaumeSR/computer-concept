<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<p>&copy; 2024 ComputerConcept. All rights reserved.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>