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
            <div class="row">
                <div class="col-md-4 mb-3">
                    <form action="Vente.php">
                        <input type="submit" value="Vendre" class="btn btn-danger">
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <form action="Achat.php">
                        <input type="submit" value="Acheter" class="btn btn-success">
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <form action="Location.php">
                        <input type="submit" value="Louer" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>