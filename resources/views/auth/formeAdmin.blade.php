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

    <link rel="stylesheet" href="{{asset('css/p/forme2.css')}}" />

    <title>Login </title>
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
          <div class="compte">
            <h1>cree compte</h1>
        </div>

          <form class="sized-form"  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="name"
                  name="name"
                />
                <label for="name">nom</label>
              </div>

              <div class="mb-3 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="prenom"
                  id="pre_name"
                  name="pre_name"
                />
                <label for="name">prenom</label>
              </div>

            <div class="mb-3 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="Username"
                id="user_name"
                name="user_name"
              />
              <label for="user_name">nom utilisateur</label>
            </div>

            <div class="mb-3 form-floating d-none">
              <input
                type="text"
                class="form-control d-none"
                placeholder="Username"
                id="direction"
                name="direction"
                value=""
              />
              <label for="direction">direction</label>
            </div>
           
            <div class="mb-3 form-floating">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                id="password"
                name="password"
              />
              <label for="password">mot de passe</label>
            </div>
            <div class="mb-3 form-floating">
                <input
                  type="password"
                  class="form-control"
                  placeholder="CPassword"
                  id="password_confirmation"
                  name="password_confirmation"
                />
                <label for="password_confirmation">confirmer le mot de passe</label>
              </div>
              <div class="mb-3 form-floating">
                <input
                  type="email"
                  class="form-control"
                  placeholder="email"
                  id="email"
                  name="email"

                />
                <label for="email">email</label>
              </div>

              <div class="mb-3 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="3"
                  placeholder="email"
                  id="identifier"
                  name="identifier"
                />
              </div>
              
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
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
