<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_slike.css">
    <title>Galerija slika</title>
</head>
<body>

<header>
    <h1>Galerija</h1>
</header>

<nav aria-label="Main Navigation">
    <ul class="nav-menu">
        <li><a href="index.html" tabindex="0">Početna</a></li>
        <li><a href="grafikon.html" tabindex="0">Grafikon</a></li>
        <li><a href="slike.html" tabindex="0">Galerija</a></li>
    </ul>
</nav>

<main>
	<h1>Galerija slika</h1>
    <section class="galerija">
        

        <div class="grid-container">
            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-1" title="1.jpg">
                    <img src="https://unsplash.it/300/200?random=1" alt="Slika 1" loading="lazy">
                </a>
                <figcaption>Slika 1</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-2" title="2.jpg">
                    <img src="https://unsplash.it/300/200?random=2" alt="Slika 2" loading="lazy">
                </a>
                <figcaption>Slika 2</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-3" title="3.jpg">
                    <img src="https://unsplash.it/300/200?random=3" alt="Slika 3" loading="lazy">
                </a>
                <figcaption>Slika 3</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-4" title="4.jpg">
                    <img src="https://unsplash.it/300/200?random=4" alt="Slika 4" loading="lazy">
                </a>
                <figcaption>Slika 4</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-5" title="5.jpg">
                    <img src="https://unsplash.it/300/200?random=5" alt="Slika 5" loading="lazy">
                </a>
                <figcaption>Slika 5</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-6" title="6.jpg">
                    <img src="https://unsplash.it/300/200?random=6" alt="Slika 6" loading="lazy">
                </a>
                <figcaption>Slika 6</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-7" title="7.jpg">
                    <img src="https://unsplash.it/300/200?random=7" alt="Slika 7" loading="lazy">
                </a>
                <figcaption>Slika 7</figcaption>
            </figure>

            <figure class="galerija_slika">
                <a class="image-popup-vertical-fit" href="#lightbox-8" title="8.jpg">
                    <img src="https://unsplash.it/300/200?random=8" alt="Slika 8" loading="lazy">
                </a>
                <figcaption>Slika 8</figcaption>
            </figure>

        </div>

        <div id="lightbox-1" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=1" alt="Slika 1">
        </div>

        <div id="lightbox-2" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=2" alt="Slika 2">
        </div>

        <div id="lightbox-3" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=3" alt="Slika 3">
        </div>

        <div id="lightbox-4" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=4" alt="Slika 4">
        </div>

        <div id="lightbox-5" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=5" alt="Slika 5">
        </div>

        <div id="lightbox-6" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=6" alt="Slika 6">
        </div>

        <div id="lightbox-7" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=7" alt="Slika 7">
        </div>

        <div id="lightbox-8" class="lightbox">
            <span class="close" onclick="window.location.hash='';">X</span>
            <img src="https://unsplash.it/900/?random=8" alt="Slika 8">
        </div>

    </section>
</main>

<footer>
    <p>&copy; 2025. Web Programiranje. Sva prava pridržana.</p>
</footer>

</body>
</html>