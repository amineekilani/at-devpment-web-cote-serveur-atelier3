<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 3 | Exercice 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "index.html";
        ?>
        <div class="container">
            <h3>Cliquer sur l'un des boutons</h3>
            <form action="redirection.php" method="POST">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="submit" value="Vendre" name="vendre" class="btn btn-danger">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="submit" value="Acheter" name="acheter" class="btn btn-success">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="submit" value="Louer" name="louer" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>