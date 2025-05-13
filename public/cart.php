<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja videoteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Moja videoteka</h2>

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
        session_start();
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $sql = "SELECT f.naslov, f.godina, f.zanr, f.ocjena FROM filmovi f 
                    JOIN zeljeni_filmovi zf ON f.id = zf.film_id 
                    WHERE zf.korisnik_id = ?";
            
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['naslov']}</td>
                            <td>{$row['godina']}</td>
                            <td>{$row['zanr']}</td>
                            <td>{$row['ocjena']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nemate filmova u svojoj videoteci.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Molimo vas da se prijavite kako biste vidjeli svoju videoteka.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
