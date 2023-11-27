<?php
if(!isset($_POST["login"])) header("Location: ./login.php");
if(!isset($_POST["haslo"])) header("Location: ./login.php");
if($_POST["login"]!="admin") header("Location: ./login.php");
if($_POST["haslo"]!="admin") header("Location: ./login.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body><main>
    <form action="dodajStrone.php" method="post">
        <p>Tytuł</p><br><input type="text" name="tytul" class="tytul"><br>
        <p>Treść</p><br><textarea class="tresc" name="tresc" maxlength="5000"></textarea><br>
        <input class="przeslij" type="submit">
    </form>
</main></body>
</html>
