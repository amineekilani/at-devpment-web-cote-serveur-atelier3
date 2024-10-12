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
            <?php
                if (isset($_GET["prenom"]) && isset($_GET["repetition"]))
                {
                    $prenom=htmlspecialchars($_GET["prenom"]);
                    $repetition=htmlspecialchars($_GET["repetition"]);
                    echo "<div class='alert alert-info col-md-3 mt-3'>";
                    for ($i=0; $i<$repetition; $i++)
                    {
                        echo "Bienvenue $prenom<br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>