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
            <a class="nav-link" href="/s/gerercompt/as">
              <span data-feather="file-text"></span>
              agent service formation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="file-text"></span>
              agent de la direction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/s/gerercompt/m">
              <span data-feather="file-text"></span>
              medecin
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
            <div class="btn-group me-2">
             <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ajouterModal">ajouter</button> 
            </div>
        
        </div>

        <div id="error" class="d-none">{{$errors}}</div>


        <h2>Comptes agents de direction</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nom</th>
              <th scope="col">prenom</th>
              <th scope="col">nom-utilisateur</th>
              <th scop="col">email</th>
              <th scop="col">departement</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($stcs as $stc)
            <tr>
                <td>{{$stc->id}}</td>
                <td>{{$stc->name}}</td>
                <td>{{$stc->pre_name}}</td>
                <td>{{$stc->user_name}}</td>
                <td>{{$stc->email}}</td>
                <td>{{$stc->direction}}</td>

              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                 {{----}} <button class="btnEdit btn btn-sm btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>modifier</button>
                  <form action="/ag/{{$stc->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">supprimer</button>
                  </form>
                  
                </div>
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

{{----}}

<!-- Modal -->
<div class="modal fade" id="ajouterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Completer les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" method="POST" action="{{ route('register') }}">
        @csrf 
        <div class="modal-body">
  
          
            @csrf
            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="name"
                  name="name"
                  required
                  value="{{ old('name') }}"

                />
                <label for="name">nom</label>
              </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="prenom"
                name="pre_name"
                value="{{ old('pre_name') }}"
                required

              />
              <label for="prenom">prenom</label>
            </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control
                @if($errors->first('user_name') == 'Ce nom utilisateur exist')
                    is-invalid
                @endif"
                value="{{ old('user_name') }}"
                placeholder="nom-utilisateur"
                id="nom-utilisateur"
                name="user_name"
                required

              />
              @if ($errors->first('user_name') == "Ce nom utilisateur exist")
              <span class="invalid-feedback" role="alert">
                <strong>Ce nom utilisateur exist déjà.</strong>
              </span>
              @endif
              <label for="prenom">nom-utilisateur</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="password"
                class="form-control
                @if($errors->first('password') == 'The must be at least characters.')
                is-invalid
                @endif"
                id="mot-de-passe"
                name="password"
                required
              />
              @if ($errors->first('password') == "The must be at least characters.")
              <span class="invalid-feedback" role="alert">
                <strong>Le mot de passe doit comporter au moins 8 caractéres.</strong>
              </span>
              @endif
              <label for="mot-de-passe">mot de passe</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="password"
                class="form-control 
                @if($errors->first('password') == "The password confirmation does not match.") is-invalid @endif"
                placeholder="Cmot-de-passe"
                id="password_confirmation"
                name="password_confirmation"
                required
              />
              @if ($errors->first('password') == "The password confirmation does not match.")
              <span class="invalid-feedback" role="alert">
                <strong>Mot de passe non confirmé.</strong>
              </span>
              @endif
              <label for="Cmot-de-passe"> confirmer mot de passe</label>
            </div>

            

            <div class="mb-1 form-floating">
              <input
                type="email"
                class="form-control
                @if($errors->first('email') == 'Cette adresse email exist')
                  is-invalid
                @endif"
                placeholder="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required

              />
              @if ($errors->first('email') == "Cette adresse email exist")
              <span class="invalid-feedback" role="alert">
                <strong>Cette adresse email exist déjà.</strong>
              </span>
              @endif
              <label for="niveau">email</label>
            </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  list="listD"
                  placeholder="departement"
                  id="departement"
                  value="{{ old('direction') }}"
                  required
                  name="direction"
                />
                <label for="departement">departement</label>
                <datalist id="listD">
                  @foreach ($dirs as $dir)
                  <option value="{{$dir->direction}}">{{$dir->direction}}</option>
                  @endforeach
                </datalist>
              </div>

              <div class="mb-1 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="1"
                  id="identifier"
                  name="identifier"
                />
                <label for="niveau">identifier</label>
              </div>


        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>
    </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" id="editForm" action="/ag" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="name"
                id="Mname"
                name="name"
                required
              />
              <label for="Mname">nom</label>
            </div>
          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="prenom"
              id="Mprenom"
              name="pre_name"
              required
            />
            <label for="Mprenom">prenom</label>
          </div>
          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="nom-utilisateur"
              id="Muser_name"
              name="user_name"
              required
            />
            <label for="Muser_name">nom-utilisateur</label>
          </div>
          <div class="mb-1 form-floating">
            <input
              type="password"
              class="form-control"
              placeholder="mot-de-passe"
              id="Mpassword"
              name="password"
              required
            />
            <label for="Mpassword">mot de passe</label>
          </div>
          <div class="mb-1 form-floating">
            <input
              type="password"
              class="form-control"
              placeholder="Cmot-de-passe"
              id="Cmot-de-passe"
              name="password"
              required
            />
            <label for="Cmot-de-passe"> confirmer mot de passe</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="email"
                class="form-control"
                placeholder="email"
                id="Memail"
                name="email"
                required
              />
              <label for="Memail">email</label>
            </div>

            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  list="listD"
                  placeholder="departement"
                  id="Mdirection"
                  name="direction"
                  required
                />
                <label for="diplome">departement</label>
                <datalist id="listD">
                  @foreach ($dirs as $dir)
                  <option value="{{$dir->direction}}">{{$dir->direction}}</option>
                  @endforeach
                </datalist>
              </div>
            
            <div class="mb-1 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="1"
                  id="identifier"
                  name="identifier"
                />
                <label for="niveau">identifier</label>
              </div>

          
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
        </form>
      </div>
    </div>
  </div>

{{----}}

    <script src="{{asset('dist/app.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{asset('js/dashboard.js')}}"></script>
  
        <script src="{{asset('dist/jquery-3.6.0.js')}}"></script>
        <script>
          $(document).ready(function () {
          var error = document.getElementById('error');
          var a =error.innerHTML;
          console.log(a);

          if(a== "[]"){
            console.log("empty");
          }else{
            $("#ajouterModal").modal('show');
          }
          });

        </script>
        <script>
        $(".btnEdit").click(function () {
            debugger;
            var currentTds = $(this).closest("tr").find("td"); // find all td of selected row
            var cell1 = $(currentTds).eq(0).text();
            var cell2 = $(currentTds).eq(1).text(); // eq= cell , text = inner text
            var cell3 = $(currentTds).eq(2).text();
            var cell4 = $(currentTds).eq(3).text(); 
            var cell5 = $(currentTds).eq(4).text();
            var cell6 = $(currentTds).eq(5).text();
            Mdirection
            $("#Mname").val(cell2);
            $("#Mprenom").val(cell3);
            $("#Muser_name").val(cell4);
            $("#Memail").val(cell5);
            $("#Mdirection").val(cell6);
            $("#editForm").attr('action','/ag/'+cell1);
            $("#EditModal").modal('show');
        });


        </script>
  
    </body>
</html>
