<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container h-100">
        <div class="vh-100 row h-50 d-flex justify-content-center align-items-center">
            <div class="col-md-6 py-5 align-center">
                <h3 class="text-center fw-bold">Register</h3>
                <form action="{{ url('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukan Kontak">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Masukan Confirm Password">
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Simpan" class="form-control text-white btn" style="background-color: rgb(21, 77, 246)">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>