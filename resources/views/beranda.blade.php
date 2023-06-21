{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td> 
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="login"></td>
            </tr>
        </table>
</body>
</html>
 --}}


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg nabae-dark fixed-top" style="background-color:#EEE8AA">
        <div class="container">
          <a class="navbar-brand" href="#">LUSSY SULISTIA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Shop
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>

            <button class="btn btn-outline-light">
                <i class="bi bi-cart-dash-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z"/>
                  </svg>
                  cart
            </button>
          </div>
          </div>
        </div>
      </nav> 
      <section id="home" class="p-5">
      <div class="container">
        <div class="text-bg text-center p-5">
          <img src="img/bisnis.jpg" widht="100%" height="500px" alt="">
        </div>
      </div>
      </section>
      <div class="container pt-5">
        <div class="row">
          @foreach ($product as $item)
            <div class="col-md-3 mb-3">
            <div class="card h-100" style="width: 16rem">
            <img src="/storage/{{$item->poto}}" class="card-img-top" alt="bts">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->nama_barang}}</h5>
                  <p class="card-text">Rp. {{$item->harga}}</p>
                  <a href="product/detail/{{$item->id}}" class="btn btn-outline-primary">View options</a>
                </div>
             </div>
          </div>
          @endforeach
          </div>
            <div class="container-fluid">
              <footer class="py-3 my-3 border-top border-primary">
              <p class="text-center">&copy;2023 <a href="https://api.whatsapp.com/send?phone=082393355676&text=%22halloo%22" class="fw-bold text-center-decoration-none">Ailusi Sulistiawati</a></p>
              </footer>
            </div>
             
        </body>
        </html>
      </footer>
    </div>
     
</body>
</html>
<script src="js/bootstrap.bundle.js  "></script>