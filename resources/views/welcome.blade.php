<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h1 class="text-center mb-5">Belajar Implementasi Public API - Narendra</h1>
        <h2 class="text-center mb-5"> Test Jenkins </h2>

        <div class="row justify-content-center">
            <!-- Card Pencarian -->
            <div class="row w-100 justify-content-center">
                <div class="col-ms-10 mb-4">
                    <div class="card h-100 text-center p-4">
                        <a href="/pencarian">
                            <h3 class="card-title">Cari Lokasi Domestik</h3>
                            <p class="card-text">Temukan lokasi.</p>
                        </a>
                    </div>
                </div>
                <div class="col-ms-10 mb-4">
                    <div class="card h-100 text-center p-4">
                        <a href="/search">
                            <h3 class="card-title">Cari Lokasi Internasional</h3>
                            <p class="card-text">Temukan lokasi.</p>
                        </a>
                    </div>
                </div>

                <!-- Card Ongkir -->
                <div class="col-ms-10 mb-4">
                    <div class="card h-100 text-center p-4 bg-danger">
                        <a href="/ongkir">
                            <h3 class="card-title">Cek Ongkir</h3>
                            <p class="card-text">Dalam Pengembangan.</p>
                        </a>
                    </div>
                </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
