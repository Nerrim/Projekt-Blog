<?php include 'baza.php';?>
<?php
$sql = "insert into posty (tytul, tresc, data) values ('".$_POST['tytul']."','".$_POST['tresc']."','".date("Y-m-d")."')";
mysqli_query($conn, $sql);
?>