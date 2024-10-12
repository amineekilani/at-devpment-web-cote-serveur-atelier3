<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 3 | Exercice 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "index.html";
        ?>
        <div class="container">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <select name="utilisateur" class="form-control">
                            <option value="">Choisir l'utilisateur</option>
                            <?php
                                $TMOTS=["Amine"=>"1234","Kilani"=>"ABCD"];
                                foreach ($TMOTS as $utilisateur=>$mot_de_passe)
                                {
                                    $choisi=(isset($_POST["utilisateur"]) && $_POST["utilisateur"]==$utilisateur)?"choisi":"";
                                    echo "<option value='$utilisateur' $choisi>$utilisateur</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success" value="Afficher le mot de passe">
                    </div>
                </div>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["utilisateur"]))
                {
                    $utilisateurChoisi=htmlspecialchars($_POST["utilisateur"]);
                    foreach ($TMOTS as $utilisateur=>$mot_de_passe)
                    {
                        if ($utilisateur==$utilisateurChoisi)
                            echo "<div class='alert alert-info mt-3'>Mot de passe de <strong>$utilisateurChoisi</strong> : <strong>$mot_de_passe</strong></div>";
                    }
                }
            ?>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <select name="mot_de_passe" class="form-control">
                            <option value="">Choisir le mot de passe</option>
                            <?php
                                foreach ($TMOTS as $nom=>$mot_de_passe)
                                {
                                    $choisi=(isset($_POST["mot_de_passe"]) && $_POST["mot_de_passe"]==$mot_de_passe)?"choisi":"";
                                    echo "<option value='$mot_de_passe' $choisi>$mot_de_passe</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Afficher le nom d'utilisateur">
                    </div>
                </div>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["mot_de_passe"]))
                {
                    $mdpChoisi=htmlspecialchars($_POST["mot_de_passe"]);
                    foreach ($TMOTS as $utilisateur=>$mot_de_passe)
                    {
                        if ($mot_de_passe==$mdpChoisi)
                            echo "<div class='alert alert-info mt-3'><strong>$mdpChoisi</strong> est le mot de passe de : <strong>$utilisateur</strong></div>";
                    }
                }
            ?>
        </div>
    </body>
</html>