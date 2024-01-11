<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Meow </title>
    </head>
    <body>
        <h1> Liste des messages </h1>
        <?php foreach($listComments as $message): ?>
        <div>
            <p> comments writen by <?= $message->user->name ?>. </p>
            <small> id: <?= $message->id ?> </small>
        </div>
        <?php endforeach; ?>
    </body>
</html>
