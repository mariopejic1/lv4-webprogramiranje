let sviFilmovi = [];

fetch('filmtv_movies.csv')
    .then(res => res.text())
    .then(csv => {
        const rezultat = Papa.parse(csv, {
            header: true,
            skipEmptyLines: true
        });
        sviFilmovi = rezultat.data.map(film => ({
            title: film.title,
            year: Number(film.year),
            genre: film.genre,
            duration: Number(film.duration),
            country: film.country?.split(',').map(c => c.trim()) || [],
            avg_vote: Number(film.avg_vote),
            total_votes: Number(film.total_votes)
        }));
        prikaziPocetneFilmove(sviFilmovi.slice(0, 30));
    })
    .catch(err => {
        console.error('Greška pri dohvacanju CSV-a:', err);
    });

function prikaziPocetneFilmove(filmovi) {
    const tbody = document.querySelector('#filmovi-tablica tbody');
    tbody.innerHTML = '';
    filmovi.forEach(film => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${film.title}</td>
            <td>${film.year}</td>
            <td>${film.genre}</td>
            <td>${film.duration} min</td>
            <td>${film.avg_vote}</td>
        `;
        tbody.appendChild(row);
    });
}

const votesSlider = document.getElementById('filter-votes');
const votesValue = document.getElementById('votes-value');
votesSlider.addEventListener('input', () => {
    votesValue.textContent = votesSlider.value;
});

document.getElementById('primjeni-filtere').addEventListener('click', () => {
    const yearFrom = parseInt(document.getElementById('filter-year-from').value);
    const yearTo = parseInt(document.getElementById('filter-year-to').value);
    const minVotes = parseInt(votesSlider.value);
    const genre = document.getElementById('filter-type').value.toLowerCase();

    const filtriraniFilmovi = sviFilmovi.filter(film => {
        const yearMatch = (!yearFrom || film.year >= yearFrom) && (!yearTo || film.year <= yearTo);
        const votesMatch = film.total_votes >= minVotes;
        const genreMatch = !genre || film.genre.toLowerCase().includes(genre);
        return yearMatch && votesMatch && genreMatch;
    });

    prikaziPocetneFilmove(filtriraniFilmovi);
});
