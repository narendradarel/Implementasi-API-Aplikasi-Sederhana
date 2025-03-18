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
        <h2 class="text-center m-4">Cek Ongkir</h2>
        <div class="">
            <form action="" method="post">
                @csrf
                <div class="mt-3">
                    <label for="origin">Lokasi Pengambilan</label>
                    <input type="text" name="origin" id="origin" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="destination">Lokasi Pengiriman</label>
                    <input type="text" name="destination" id="destination" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="weight">Berat</label>
                    <input type="number" name="weight" id="weight" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="courier">Kurir</label>
                    <select name="courier" id="courier" class="form-control">
                        <option value="">Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="sicepat">SICEPAT</option>
                        <option value="tiki">TIKI</option>
                    </select>
                </div>
                <div class="mt-3 d-grid ">
                    <button type="submit" name='ongkir' class="btn btn-primary">Cek Ongkir</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
