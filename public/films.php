<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtriranje filmova</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Filmovi</h2>
<form method="GET">
    <input type="text" name="zanr" placeholder="Žanr">
    <input type="text" name="drzava" placeholder="Država">
    <input type="number" name="godina" placeholder="Godina">
    <input type="submit" value="Filtriraj">
</form>

<table>
    <thead>
        <tr>
            <th>Naslov</th>
            <th>Godina</th>
            <th>Žanr</th>
            <th>Ocjena</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM filmovi WHERE 1";
        
        if (!empty($_GET['zanr'])) {
            $zanr = mysqli_real_escape_string($conn, $_GET['zanr']);
            $sql .= " AND zanr LIKE '%$zanr%'";
        }
        if (!empty($_GET['drzava'])) {
            $drzava = mysqli_real_escape_string($conn, $_GET['drzava']);
            $sql .= " AND drzava LIKE '%$drzava%'";
        }
        if (!empty($_GET['godina'])) {
            $godina = intval($_GET['godina']);
            $sql .= " AND godina = $godina";
        }

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['naslov']}</td>
                    <td>{$row['godina']}</td>
                    <td>{$row['zanr']}</td>
                    <td>{$row['ocjena']}</td>
                  </tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
