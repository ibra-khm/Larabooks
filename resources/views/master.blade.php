<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home')</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Larabooks</a>
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                </ul>
                <form action="/" class="d-flex ms-5">
                  @csrf
                  <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

              </div>
            </div>
            <div class="container d-flex flex-row-reverse">
              <div>
                <a href="/login" class="text-dark mx-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                <a href="/register" class="text-info mx-2"><i class="fa-solid fa-user-plus"></i> Register</a>
              </div>
            </div>
          </nav>
    </header>

    @yield('content')

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

</body>

</html>
