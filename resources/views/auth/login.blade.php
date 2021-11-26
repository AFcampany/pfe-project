<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="../public/dist/app.js"></script>

    <script>
      var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
      );
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
      });
    </script>
    
    <!-- Bootstrap CSS -->
    <link
      href="{{asset('dist/app.css')}}"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('css/index.css')}}" />

    <title>Connexion</title>
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
    <div
      class="glass-card container-sm d-flex flex-column justify-content-center"
    >
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <img src="{{asset('assets/GTP.svg')}}" alt="GTP" class="sized-logo" />
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <form class="sized-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 form-floating">

              <input
                type="text"
                class="form-control @if($errors->first('user_name') == "Vous devez saisir un nom d'utilisateur existant.") is-invalid @endif"
                placeholder="Username"
                value="{{ old('user_name') }}"
                id="username"
                name="user_name"
                required
                
              />
              @error('user_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{$message}}</strong>
                </span>
              @enderror

              <label for="username">Nom utilisateur</label>
            </div>
            <div class="mb-3 form-floating">

              <input
                type="password"
                class="form-control @if($errors->first('user_name') == "These credentials do not match our records.") is-invalid @endif"
                placeholder="Password"
                id="password"
                name="password"
                required
              />
              @if ($errors->first('user_name') == "These credentials do not match our records.")
              <span class="invalid-feedback" role="alert">
                <strong>Mot de passe erroné.</strong>
              </span>
              @endif
              <label for="password">Mot de passe</label>
            </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Se connecter</button>
             
            </div>

          </form>
        </div>
      </div>
    </div>
    
    
  </body>
</html>
