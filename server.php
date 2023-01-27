<?php
    $content = file_get_contents(__DIR__ . "/dischi.json");
    $discs = json_decode($content, true);

    if($discs != null){
        $discList = $discs;
    }
    //elaboro i dati presi dal db limitando l'utente
    header('content-type: application/json');

    echo json_encode($discs);
