const chartGeneralCategorias = document.getElementById("chartGeneralCategorias");
const chartGeneralTipos = document.getElementById("chartGeneralTipos");

new Chart(chartGeneralCategorias, {
    type: "pie",
    data: {
        labels: ["Videojuegos", "Plataformas", "Tecnologia", "Programación", "Entretenimiento"],
        datasets: [
            {
                label: "Publicaciones",
                data: [12, 19, 3, 5, 20],
                // data: [$noticias, $guias, $articulos, $analisis],
                borderWidth: 1,
            },
        ],
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: "Categorias de las publicaciones",
            },
        },
    },
});

new Chart(chartGeneralTipos, {
    type: "pie",
    data: {
        labels: ["Noticias", "Guias", "Articulos", "Analisis"],
        datasets: [
            {
                label: "Publicaciones",
                data: [12, 19, 3, 5],
                // data: [$noticias, $guias, $articulos, $analisis],
                borderWidth: 1,
            },
        ],
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: "Tipos de publicaciones",
            },
        },
    },
});
