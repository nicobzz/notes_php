<?php

try{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=digital;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch(Exception $e) {
    die('Erreur : '. $e->getMessage());
}

function get_notes_table(){
    global $mysqlClient;
    $sqlQuery = 'SELECT * FROM notes ORDER BY note ASC';
    $notes_req = $mysqlClient->prepare($sqlQuery);
    $notes_req->execute();
    //Retourne un tableau contenant toutes les lignes du jeu 
    $notes = $notes_req->fetchAll();
    return $notes;
}

function add_note($nouvelle_note){
    global $mysqlClient;
    $sqlQuery = 'INSERT INTO notes(note) VALUES (:ajout_note)';
    $insert_note = $mysqlClient->prepare($sqlQuery);
    $insert_note->execute( array('ajout_note'=>$nouvelle_note) );
}
//  J'aime le foot

?>