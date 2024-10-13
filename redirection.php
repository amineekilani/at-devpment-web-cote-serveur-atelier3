<?php
if (isset($_POST["vendre"]))
{
    header("Location: Vente.php");
    exit();
}
else if (isset($_POST["acheter"]))
{
    header("Location: Achat.php");
    exit();
}
else if (isset($_POST["louer"]))
{
    header("Location: Location.php");
    exit();
}