<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La start-up Nation !</title>
</head>

<body>
    <form action="notes-include.php" method="GET">
        <label for="note-id">entre ta note Bruno !</label>
        <input type="text" id="note-id" name="note_entree">
        <button type="submit">Valider</button>
    </form>

    <h1> La start-up Nation ! </h1>

    <?php
    include_once('db.php');

    if (isset($_GET['note_entree'])) {
        add_note($_GET['note_entree']);
    }

    $notes = get_notes_table();
    foreach ($notes as $n_ligne => $note) {
        echo "note numéro " . $n_ligne . ": ";
        echo ($note['note']) . '<br>';
    }
    ?>
</body>

</html>