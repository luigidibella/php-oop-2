<?php 

require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="max-width=device-max-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css' integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <title>php-oop-2</title>
</head>
<body>
  <nav class="navbar fixed-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PetShop</a>
    </div>
  </nav>

  <div class="container my-5 text-center">

    <div class="container py-5">
      <h3>Dogs</h3>
      <div class="row row-cols-3">
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
       
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <h3>Cats</h3>
      <div class="row row-cols-3">
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
       
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card">
            <div>
              <img src="https://cdn.manomano.com/images/images_products/26388425/P/96933300_1.jpg" class="card-img-top" alt="Immagine" style="max-width: 250px;">
            </div>
            <div class="card-body">
              <h5 class="card-title">Titolo</h5>
              <p class="card-text">Prezzo</p>
               <p>Icona Categoria<br>
                <i class="fa-solid fa-dog"></i>
                <i class="fa-solid fa-cat"></i>
              </p>
              <a href="#" class="btn btn-primary">Tipo Articolo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
</body>
</html>