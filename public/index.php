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
        
        <div>
            <label for="filter-votes">Minimalni broj glasova:</label>
            <input type="range" id="filter-votes" min="0" max="1000" step="1" value="0">
            <span id="votes-value">0</span> 
        </div>
        
        <div>
            <label for="filter-type">Vrsta filma:</label>
            <select id="filter-type">
                <option value="">Odaberi vrstu filma</option>
                <option value="Action">Akcija</option>
                <option value="Comedy">Komedija</option>
                <option value="Drama">Drama</option>
                <option value="Horror">Horor</option>
                <option value="Thriller">Triler</option>
                <option value="Spy">Detektivski</option>
                <option value="Documentary">Dokumentarni</option>
            </select>
        </div>

        <button id="primjeni-filtere">Filtriraj</button>
    </div>

    <h2>Filmovi</h2>
    <table id="filmovi-tablica">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Godina</th>
                <th>Žanr</th>
                <th>Trajanje</th>
                <th>Ocjena</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

	<section class="main-part">
		<section class="top-rated-movies">
		  <h2>Najbolje ocijenjeni filmovi (IMDb)</h2>
		  <div class="top-movies-content">
			<article class="top-movie">	  
			  <p><strong>Naslov:</strong> Some like It Hot</p>
			  <p><strong>Godina:</strong> 1959</p>
			  <p><strong>IMDb ocjena:</strong> 9.1</p>
			</article>
			<article class="top-movie">
				<p><strong>Naslov:</strong> Fail-Safe</p>	
			  <p><strong>Godina:</strong> 1964</p>
			  <p><strong>IMDb ocjena:</strong> 8.2</p>
			</article>
			<article class="top-movie">
				<p><strong>Naslov:</strong> Buggs Bunny's Third Movie</p>
				<p><strong>Godina:</strong> 1982</p>
			  <p><strong>IMDb ocjena:</strong> 7.7</p>
			</article>
		  </div>
		</section>
	  
		<aside class="recommended-movies">
		  <h2>Preporučeni filmovi</h2>
		  <div class="movies-grid">
			<div class="movie-card">
			  <img src="images/diner.jpg" alt="Diner" class="movie-poster">
			  <p>Diner</p>
			</div>
			<div class="movie-card">
			  <img src="images/atcloserange.jpg" alt="At Close Range" class="movie-poster">
			  <p>At Close Range</p>
			</div>
			<div class="movie-card">
			  <img src="images/somelikeithot.webp" alt="Some Like It Hot" class="movie-poster">
			  <p>Some Like It Hot</p>
			</div>
			<div class="movie-card">
			  <img src="images/failsafe.jpg" alt="Fail Safe" class="movie-poster">
			  <p>Fail Safe</p>
			</div>
		  </div>
		</aside>
	  </section>
	
	  <footer>
        <p>&copy; 2025. Web Programiranje. Sva prava pridržana.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
