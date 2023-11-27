<?php include 'baza.php';?>
<?php
$tresc = $_POST['tresc'];
$tresc = str_replace("
", "<br>", $tresc);
$sql = "insert into posty (tytul, tresc, data) values ('".$_POST['tytul']."','".$tresc."','".date("Y-m-d")."')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: ./")
?>