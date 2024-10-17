<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="vh-100" style="background-color: #508bfc;">
    <div class="container"> 
            <section>
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                      <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            @if (session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                          <h3 class="mb-5 fw-bolder">LOGIN</h3>
                            
                            <form action="{{ route('login-proses') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="username">Username</label>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                  <p>Belum punya akun ? registrasi <a href="{{ route('register') }}">disini</a></p>
                                <button class="btn btn-primary btn-sm btn-block px-4 fw-bold" type="submit">Login</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>