<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>BLOG</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>    
    <?php include 'baza.php';?>
    <div class="posty">
        <h1 id="ttl"> Blog TAK </h1>
        <?php
        $sql = "select * from posty;";
        $dane = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($dane)) {
            $tresc = substr($row["tresc"],0,300);
            echo '<a href="./posty.php?id='.$row["id"].'">
            <div class="post">
             <span class="tytul">'.$row["tytul"].'</span><br>
            <span class="tresc">'.$tresc.'..</span>
            </div>
            </a>
            ';
        }
        ?>
    </div>
    </main>
</body>
</html>
