<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $TMOTS = [
        'user1' => 'pw1',
        'user2' => 'pw2',
        'user2' => 'pw2',
        'user3' => 'pw3'
    ]
    ?>
    <fieldset>Question2 : le mot de passe d'un user
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <select name="choix" id="">
                <?php
                foreach ($TMOTS as $user => $pw) {
                    echo "<option value=$pw>$user</option>";
                }
                ?>
                <input type="submit" name="ok1" value="Afficher Mot de passe">
            </select>
        </form>
    </fieldset>
    <fieldset>Question 3 : Le nom d'un user
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <select name="choix" id="">
                <?php
                foreach ($TMOTS as $user => $pw) {
                    echo "<option value=$user>$pw</option>";
                }
                ?>
                <input type="submit" name="ok2" value="Afficher Le nom de l'utilasateur">
            </select>
        </form>
    </fieldset>
    <?php

    if (isset($_POST['ok1'])) {
        $pw = $_POST['choix'];
        $user = array_search($pw, $TMOTS);
        echo "<h4>Le mot de passe de $user est $pw</H4>";
    }
    if (isset($_POST['ok2'])) {
        $user = $_POST['choix'];
        $pw = $TMOTS[$user];
        echo "<H4>Le nom de user ayant le mot de passe $pw est : $user</H4>";
    }
    ?>


</body>

</html>