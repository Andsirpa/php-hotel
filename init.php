<?php require_once __DIR__ . "./hotels.php";

// uso il Null Coaleshing Operator per una sintassi più leggibile
// Filtro per parcheggio
$parking = $_GET['parking'] ?? null;
if ($parking === 'on') {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'];
    });
}

// Filtro per voto
$vote = (int) ($_GET['vote'] ?? 0);
if ($vote > 0) {
    $hotels = array_filter($hotels, function ($hotel) use ($vote) {
        return $hotel['vote'] >= $vote;
    });
}

?>