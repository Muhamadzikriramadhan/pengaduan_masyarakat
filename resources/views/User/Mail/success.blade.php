<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .btn-purple {
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
        }

        .btn-purple:hover {
            background: #6a70fc;
            border: 1px solid #6a70fc;
            color: #fff;
        }

    </style>

    <title>Verifikasi Email Berhasil</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-header">
                        Verifikasi Email Berhasil
                    </div>
                    <div class="card-body">
                        <p>Sekarang Anda bisa mengirimkan pengaduan di website PEKAT. Dan akun Anda sudah aman sekarang.
                        </p>
                        <a href="{{ route('pekat.index') }}" class="btn btn-purple">Masuk ke Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
