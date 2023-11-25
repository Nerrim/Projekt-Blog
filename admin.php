<?php
if($_POST["login"]!="admin") header("Location: ./login.php");
if($_POST["haslo"]!="admin") header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
    <form action="dodajStrone.php" method="post">
        Tytuł<input type="text" name="tytul">
        Treść<input type="text" name="tresc">
        <input type="submit">
    </form>
</body>
</html>