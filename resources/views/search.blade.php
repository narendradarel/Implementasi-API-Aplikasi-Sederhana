<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center m-4">Pencarian Lokasi</h2>
        <div class="">
            <form action="{{ route('search.result') }}" method="post">
                @csrf
                <div class="mt-3">
                    <label for="search">Lokasi Pencarian Alamat Internasional</label>
                    <input type="string" name="search" id="search" class="form-control"></input>
                    <div class="mt-3 d-grid ">
                        <button type="submit" name='ongkir' class="btn btn-primary">Cari Lokasi</button>
                    </div>
            </form>
        </div>
        @if (isset($data))
            <div class="mt-4">
                <h3>Hasil Pencarian</h3>
                <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
            </div>
        @endif
    </div>
</body>

</html>
