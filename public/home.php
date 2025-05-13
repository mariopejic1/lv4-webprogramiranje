<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Dobrodošli na videoteku</h1>
<p>Pronađite svoje omiljene filmove!</p>

<section class="recommended-movies">
    <h2>Preporučeni filmovi</h2>
    <div class="movies-grid">
        <?php
        $sql = "SELECT * FROM filmovi LIMIT 4";  
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='movie-card'>
                    <img src='images/{$row['slika']}' alt='{$row['naslov']}'>
                    <p>{$row['naslov']}</p>
                  </div>";
        }
        ?>
    </div>
</section>

</body>
</html>
