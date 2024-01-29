<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop-1</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header class="bg-dark p-5 shadow">
    <h1 class="text-center text-white">
      PHP OOP 2 - Shop
    </h1>
  </header>
  <main class="mb-5">
    <div class="container">
      <div class="row">
        <?php include_once __DIR__ . '/productCard.php'?>
      </div>
    </div>
  </main>
</body>

</html>