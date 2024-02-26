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
            <h1 class="display-4 fw-bold text-primary mb-5">HOTELS</h1>
        </div>

        <!-- aggiungo il form per i filtri -->
        <form action="index.php" method="get" class="d-flex justify-content-center mb-3">
            <label for="parking">Parcheggio:</label>
            <input type="checkbox" name="parking" id="parking" class="form-check-input me-3">
            <br>
            <!-- filtro per voto -->
           <label for="vote" class="me-2">Voto minimo:</label>
                <select name="vote" id="vote" class="form-select w-25">
                <option value="">Tutti</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <br>
            <button type="submit" class="btn btn-primary ms-3">Filtra</button>
        </form>


        <!-- stampo in una tabella -->
        <table class="table table-striped table-bordered mt-5">
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