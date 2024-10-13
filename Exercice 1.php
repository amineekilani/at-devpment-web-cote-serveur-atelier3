<!DOCTYPE html>
<html>
    <head>
        <title>Atelier 3 | Exercice 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include "index.html";
        ?>
        <div class="container">
            <h1 class="mb-4">Inscription à la visite guidée</h1>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <div class="col-md-3 mb-3">
                    Votre nom : <input type="text" name="nom" class="form-control" placeholder="Saisir votre nom" value="<?=isset($_POST["nom"])?htmlspecialchars($_POST["nom"]):""?>">
                </div>
                <div class="col-md-3 mb-3">
                    Votre prénom : <input type="text" name="prenom" class="form-control" placeholder="Saisir votre prénom" value="<?=isset($_POST["prenom"])?htmlspecialchars($_POST["prenom"]):""?>">
                </div>
                <div class="col-md-3 mb-3">
                    Votre âge : <input type="text" name="age" class="form-control" placeholder="Saisir votre âge" value="<?=isset($_POST["age"])?htmlspecialchars($_POST["age"]):""?>">
                </div>
                <div class="col-md-3 mb-3">
                    Votre adresse mail : <input type="email" name="email" class="form-control" placeholder="Saisir votre adresse mail" value="<?=isset($_POST["email"])?htmlspecialchars($_POST["email"]):""?>">
                </div>
                <input type="submit" class="btn btn-success" value="Inscription">
                <input type="submit" name="afficher" class="btn btn-primary" value="Afficher">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $nom= htmlspecialchars(strip_tags($_POST["nom"]));
                    $prenom=htmlspecialchars(strip_tags($_POST["prenom"]));
                    $age=htmlspecialchars(strip_tags($_POST["age"]));
                    $email=htmlspecialchars(strip_tags($_POST["email"]));
                    $afficher=isset($_POST["afficher"])?$_POST["afficher"]:"";
                    if (isset($_POST["afficher"]))
                    {
                        echo "<div class='alert alert-info mt-3'>";
                        if (empty($nom) || empty($prenom) || empty($age) || empty($email))
                            echo "<script>alert('Veuillez remplir tous les champs');</script>";
                        foreach ($_POST as $key=>$value)
                        {
                            echo ucwords($key)." : ".$value."<br>";
                        }
                        echo "</div>";
                    }
                    echo "<div class='alert alert-info mt-3'>";
                    echo var_dump($_POST)."<br>";
                    print_r($_POST);
                    echo "<br>var_dump affiche le type de données, la taille et la valeur de la variable alors que print_r affiche juste la valeur de la variable.</div>";
                }
            ?>
        </div>
    </body>
</html>