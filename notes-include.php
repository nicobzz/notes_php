<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="notes-include.php" method="GET">
<label for="note-id">entrez votre note</label>
    <input type="text" id="note-id" name="note_entree">
    <button type="submit">Valider</button>
</form>
<?php
include_once('db.php');
//inclue le fichier db.php une seule fois m^emesi on rappelle plusueireurs fois include_once('db.php');

if( isset($_GET['note_entree']) ){
    add_note($_GET['note_entree']);
}

$notes = get_notes_table();
foreach($notes as $n_ligne=>$note){
    //$notes est le tableau issu de la base de donnée
    //$n_ligne va etre la clef de chaque élement du tableau (donc le numéro de la ligne du tableau)
    //$note va être le sous tableau du tableau note qui contient une note 'note' ,
    // et son identifiant 'id'
    echo "note numéro ".$n_ligne.": ";
    echo($note['note']).'<br>';
   }

//    Le foot c'est bien 
?>
</body>
</html>