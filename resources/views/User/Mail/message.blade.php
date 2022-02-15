<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>

        .text-center {
            text-align: center;
        }

        .text-purple {
            color: #6a70fc;
        }

        .text-grey {
            color: #909090;
        }

        .btn {
            padding: 14px;
            border-radius: 4px;
        }

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

        .mt-3 {
            margin-top: 32px;
        }

        .mb-3 {
            margin-bottom: 32px;
        }
    </style>

    <title>Verifikasi Email - PEKAT</title>
</head>
<body>
    <div class="text-center">
        <h2 class="text-purple">Verifikasi Email Kamu</h2>
    </div>
    <p>Hai <span class="text-purple mb-3">{{ $nama }}</span>, hanya beberapa langkah lagi sebelum kamu dapat menggunakan akun Anda.</p>
    <p class="text-grey mb-3">Gunakan tombol dibawah ini untuk memverifikasi email kamu.</p>
    <a href="{{ $link }}" class="btn btn-purple">Verifikasi Email Sekarang</a>
    <p class="mb-3"></p>
    <p class="text-grey mb-3">Jika tombol tidak berfungsi, Anda juga bisa klik link berikut atau copy paste pada browser Anda</p>
    <a href="{{ $link }}" class="mb-3">{{ $link }}</a>
    <p>Kode verifikkasi ini akan berakhir dalam waktu 30 menit. Bila kode ini tidak berfungsi atau sudah berakhir masa berlakunya, silahkan lakukan kirim email verifikasi ulang.</p>
</body>
</html>