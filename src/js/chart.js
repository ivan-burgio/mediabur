const ctx1 = document.getElementById("chartGeneral1");
const ctx2 = document.getElementById("chartGeneral2");
const ctx3 = document.getElementById("chartGeneral3");

new Chart(ctx1, {
    type: "bar",
    data: {
        labels: ["Noticias", "Guias", "Articulos", "Analisis"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19, 3, 5],
                // data: [$noticias, $guias, $articulos, $analisis],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

new Chart(ctx2, {
    type: "pie",
    data: {
        labels: ["Noticias", "Guias", "Articulos", "Analisis"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19, 3, 5],
                // data: [$noticias, $guias, $articulos, $analisis],
                borderWidth: 1,
            },
        ],
    },
});

new Chart(ctx3, {
    type: "pie",
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
