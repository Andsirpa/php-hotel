<?php require_once "./init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotels</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center mt-5">
            <h1>HOTELS</h1>
        </div>
    <!-- stampo in una tabella -->
        <table class="table table-striped table-bordered mt-3">
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Voto</th>
        <th>Distanza dal centro</th>
      </tr>
      <?php foreach ($hotels as $hotel): ?>
        <tr>
          <td><?=  $hotel["name"]; ?></td>
          <td><?=  $hotel["description"]; ?></td>
          <td><?=  $hotel["parking"] ? "Si" : "No"; ?></td>
          <td><?=  $hotel["vote"]; ?></td>
          <td><?=  $hotel["distance_to_center"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    </div>

</body>
</html>