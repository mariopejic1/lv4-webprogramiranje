<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafikon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav aria-label="Main Navigation">
        <ul class="nav-menu">
            <li><a href="index.php" tabindex="0">Početna</a></li>
            <li><a href="grafikon.php" tabindex="0">Grafikon</a></li>
            <li><a href="slike.php" tabindex="0">Galerija</a></li>
        </ul>
    </nav>

    <div id="filters">
        <div>
            <label for="filter-year-range">Raspon godina:</label>
            <input type="number" id="filter-year-from" min="1900" placeholder="Od godine">
            <input type="number" id="filter-year-to" min="1900" placeholder="Do godine">
        </div>
    </div>

    <footer>
        <p>&copy; 2025. Web Programiranje. Sva prava pridržana.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
