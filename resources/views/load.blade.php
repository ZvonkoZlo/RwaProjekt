<!DOCTYPE html>
<html>
    <head>
        <title>Car Rental Services</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      </head>
  <body>
  

    <header>
        <h1 class="text-center my-5">Dobrodošli</h1>
      </header>
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Rent a car</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#about">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#fleet">Naša ponuda vozila</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontaktirajte nas</a>
            </li>
        
           
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontaktirajte nas</a>
        </li>
         
          <li class="nav-item">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
          </li>
        </ul>
        </div>
      </nav>
  
      <section id="about">
        <div class="container">
          <h2 class="text-center my-5">O nama</h2>
          <p class="text-center">Mi smo firma za iznajmljivanje vozila,koja nudi veliku ponudu vozila i pristupačne cijene koje ce zadovoljiti sve vase potrebe.Svejedno tražite li kompaktno vozilo za grada ili limuzinu za duža putovanja,imamo ponešto za svakoga.</p>
        </div>
      </section>
  
      <section id="fleet">
        <div class="container">
          <h2 class="text-center my-5">Naša ponuda vozila</h2>
          <p class="text-center">Mi imamo širok opseg vozila za izabrati.Naša ponuda uključuje kompaktne automobile,sedane,SUV i kombije. <a href="{{ route('fleet') }}">Klikni </a> da pogledate našu čitavu ponudu.</p>
        </div>
      </section>
  
     

    <section id="contact">
      <h2>Kontaktirajte nas</h2>
      <p>Kontaktirajte nas da bi rezervirali vozilo ili ako imate više pitanja.</p>
      <ul>
        <li>Email: info@carrentalservice.com</li>
        <li>Phone: 063-000-000</li>
      </ul>
    </section>

    <footer>
      <p>Copyright © 2022 Car Rental Service Zvonko & Veselko</p>
    </footer>
  </body>
</html>