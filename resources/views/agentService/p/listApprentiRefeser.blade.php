<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>compte</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/app.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/p/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ENGTP</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="w-100" action="/recherche" method="GET">

          <input class="form-control form-control-dark w-100" name="recherche" type="text" placeholder="rechercher">
          
          </form>
          <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        </div>
        </header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/s/home">
                  <span data-feather="home"></span>
                  home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/apc">
                  <span data-feather="file-text"></span>
                  demande en attente
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="file-text"></span>
                  demande refusé
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ap">
                  <span data-feather="file-text"></span>
                  liste des apprentis
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/apf">
                  <span data-feather="file-text"></span>
                  fin de stage
                </a>
              </li>

        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary d-none" data-bs-toggle="modal" data-bs-target="#ajouter-modal">ajouter</button> 
            </div>

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span data-feather="calendar"></span>
               
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><button class="dropdown-item" id="a">cette semaine</button></li>
                <li><button class="dropdown-item" id="b">ce mois</button></li>
                <li><button class="dropdown-item" id="c">cette année</button></li>
                <li><button class="dropdown-item" id="d">tout le temps</button></li>

                <form class="d-none" id="time" action="/apr" method="GET">
                <input class="d-none" type="text" id="t" name="type" value="0">
                </form>
                
              </ul>


            </div>
        
        </div>

      

        <h2>demande refusé</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">date-n</th>

                <th scope="col">email</th>
                <th scop="col">niveau</th>
                <th scop="col">diplome</th>
                <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($stcs as $stc)
            <tr>
                <td>{{$stc->id}}</td>
                <td>{{$stc->nom}}</td>
                <td>{{$stc->prenom}}</td>
                <td>{{$stc->date_naissence}}</td>

                <td>{{$stc->email}}</td>
                <td>{{$stc->niveau_scolaire}}</td>
                <td>{{$stc->diplome}}</td>

              <td>
                <form action="/apr/{{$stc->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">supprimer</button>
                  </form>
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
    <script src="{{asset('dist/app.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{asset('js/dashboard.js')}}"></script>
   
      <script src="{{asset('dist/jquery-3.6.0.js')}}"></script>

      <script>
        $("#a").click(function () {
          $("#t").val(1);
          document.getElementById('time').submit();
        });

        $("#b").click(function () {
          $("#t").val(2);
          document.getElementById('time').submit();

        });

        $("#c").click(function () {
          $("#t").val(3);
          document.getElementById('time').submit();

        });

        $("#d").click(function () {
          $("#t").val(0);
          document.getElementById('time').submit();

        });
      </script>
    </body>
</html>
