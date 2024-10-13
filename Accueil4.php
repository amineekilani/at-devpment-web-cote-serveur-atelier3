<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 3 | Exercice 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "index.html";
        ?>
        <div class="container">
            <h1>Prénom et répétiton</h1>
            <form action="Bienvenue.php" method="GET">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        Prénom : <input type="text" name="prenom" class="form-control" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        Répétition : <input type="number" name="repetition" class="form-control" min=0 max=9 required>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Cliquez ici">
            </form>
        </div>
    </body>
</html>