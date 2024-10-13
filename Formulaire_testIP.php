<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 3 | Exercice 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "index.html";
        ?>
        <div class="container">
            <h1>Vérification d'adresse IPv4</h1>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <input type="text" name="ip1" class="form-control" value="<?=isset($_POST["ip1"])?htmlspecialchars($_POST["ip1"]):""?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" name="ip2" class="form-control" value="<?=isset($_POST["ip2"])?htmlspecialchars($_POST["ip2"]):""?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" name="ip3" class="form-control" value="<?=isset($_POST["ip3"])?htmlspecialchars($_POST["ip3"]):""?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <input type="text" name="ip4" class="form-control" value="<?=isset($_POST["ip4"])?htmlspecialchars($_POST["ip4"]):""?>">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Vérifier">
            </form>
            <?php
                include "Fonctions.php";
                if ($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $ip=htmlspecialchars($_POST["ip1"]).".".htmlspecialchars($_POST["ip2"]).".".htmlspecialchars($_POST["ip3"]).".".htmlspecialchars($_POST["ip4"]);
                    if (valideIP($ip))
                        echo "<div class='alert alert-info mt-3'>$ip est une adresse IPv4 valide.</div>";
                    else
                        echo "<div class='alert alert-info mt-3'>$ip n'est pas une adresse IPv4 valide !</div>";
                }
            ?>
        </div>
    </body>
</html>