<?php require_once "./init.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotels</title>
</head>
<body>
    <h1>HOTELS</h1>
<!-- stampo in una tabella -->
    <table>
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

</body>
</html>