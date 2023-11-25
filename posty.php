<?php 
include 'baza.php';
$idPostu = $_GET["id"];
$sql = 'select * from posty where id='.$idPostu;
$tytul = "";
$tresc = "";
$dane = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($dane)) {
    $tytul = $row["tytul"];
    $tresc = $row["tresc"];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tytul?></title>
</head>
<body>
    <?php
    echo '<h1>'.$tytul.'</h1>';
    echo $tresc;
    ?>
</body>
</html>