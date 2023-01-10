<!DOCTYPE html>
<html>
  <head>
    <title>Fleet - Car Rental Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Car Rental Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('load') }}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Ponuda vozila <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{ route('load') }}#contact">Kontaktirajte nas</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container my-5">
      <h1 class="text-center">Our Fleet</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Compact Car">
            <div class="card-body">
              <h5 class="card-title">Compact Car</h5>
              <p class="card-text">Perfect for city trips and easy to park.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Sedan">
            <div class="card-body">
              <h5 class="card-title">Sedan</h5>
              <p class="card-text">Comfortable and stylish for longer trips.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" class>
        </div>
    </div>

    <footer>
      <p class="text-center my-5">Copyright © 2022 Car Rental Service Zvonko & Veselko</p>
    </footer>
  </body>
</html>