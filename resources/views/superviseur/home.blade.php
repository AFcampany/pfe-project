<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="{{asset('dist/app.css')}}"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('css/p/home-superviseur.css')}}" />

    <title>Acceuil</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{asset('assets/apple-touch-icon.png')}}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{asset('assets/favicon32.png')}}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('assets/favicon16.png')}}"
    />
    <link rel="manifest" href="{{asset('assets/site.webmanifest')}}" />
  </head>
  <body class="d-flex justify-content-center align-items-center">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex flex-column justify-content-between">
            <a href="/stc">
              <img
                src="{{asset('assets/intern.svg')}}"
                alt="Stagiaire"
                class="simple-card"
              />
            </a>
            <h1>GESTION DES STAGIAIRES</h1>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex flex-column justify-content-between">
            <a href="/apc">
              <img
                src="{{asset('assets/worker.svg')}}"
                alt="Apprenti"
                class="simple-card"
              />
            </a>
            <h1>GESTION DES APPRENTIS</h1>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex flex-column justify-content-between">
            <a href="/s/gerercompt/as">
              <img src="{{asset('assets/add.svg')}}" alt="Ajouter" class="simple-card" />
            </a>
            <h1>GESTION DES COMPTES</h1>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('dist/app.js')}}"></script>
    <script>
      var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
      );
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
      });
    </script>
  </body>
</html>
