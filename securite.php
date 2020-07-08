<?php




if ($_POST ["password"]!="2020")
{
    echo "Mauvais couple identifiant / mot de passe";
}
else { 
    $_SESSION ["id"]=$_POST["name"];

    header("Location: http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/mini-site-routing.php");
    die();
}


