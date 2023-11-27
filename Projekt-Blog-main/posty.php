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
    <link rel="stylesheet" href="css/post.css">
    <meta charset="UTF-8">
    <title><?php echo $tytul?></title>
</head>
<body>
    <main>
        <button onclick="poprzednia()">Poprzednia</button>
        <button onclick="nastepna()">Następna</button>
    <?php
    echo '<h1 class="tytul">'.$tytul.'</h1>';
    echo '<p class="tresc">'.$tresc.'</p>';
    ?>
    </main>
    <script>
    let nr_strony=parseInt(<?php echo $idPostu;?>);
    function nastepna(){
        window.location.href="./posty.php?id="+(nr_strony+1);
    }
    function poprzednia(){
        nr_strony!= 1 ? window.location.href="./posty.php?id="+(nr_strony-1) :{};
    }
    </script>
</body>
</html>