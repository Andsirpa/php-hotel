
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


    // Filtro per parcheggio
    if (isset($_GET['parking']) && $_GET['parking'] === 'on') {
    $hotels = array_filter($hotels, function($hotel) {
        return $hotel['parking'];
    });
    }

    // Filtro per voto
    if (isset($_GET['vote']) && is_numeric($_GET['vote'])) {
    $vote = (int) $_GET['vote'];
    $hotels = array_filter($hotels, function($hotel) use ($vote) {
        return $hotel['vote'] >= $vote;
    });
    }

?>
