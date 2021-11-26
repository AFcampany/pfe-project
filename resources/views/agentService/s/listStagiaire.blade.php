<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>liste Stagiaire</title>

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
                <a class="nav-link" href="/stc">
                  <span data-feather="file-text"></span>
                  demande en attente
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/str">
                  <span data-feather="file-text"></span>
                  demande refusé
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="file-text"></span>
                  liste des stagiaires
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/stf">
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

                <form class="d-none" id="time" action="/st" method="GET">
                <input class="d-none" type="text" id="t" name="type" value="0">
                </form>
                
              </ul>
            </div>
        
        </div>

      

        <h2>la listes des stagiaires</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">date-n</th>

                <th class="d-none" scope="col">lieu-n</th>

                <th class="d-none">#</th>
                <th class="d-none">#</th>
                <th class="d-none">#</th>

                <th class="d-none">#</th>
                <th class="d-none">#</th>
                <th class="d-none">#</th>
                <th class="d-none">#</th>
                <th class="d-none">#</th>

                <th scope="col">memoire</th>
                <th scope="col">attestation</th>

                <th scope="col">date-d</th>
                <th scope="col">date-f</th>

                <th scope="col">detail</th>
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

                <td class="d-none">{{$stc->lieu_naissence}}</td>

                <td class="d-none">{{$stc->email}}</td>
                <td class="d-none">{{$stc->niveau_scolaire}}</td>
                <td class="d-none">{{$stc->diplome}}</td>

                <td class="d-none">{{$stc->specialite}}</td>
                <td class="d-none">{{$stc->direction}}</td>
                <td class="d-none">{{$stc->theme}}</td>
                <td class="d-none">{{$stc->nom_et_prenom_tuteur}}</td>
                <td class="d-none">{{$stc->duree_stage}}</td>

                @if ($stc->pdf == null)
                <td>memoire</td>
                @else
                <td><a class="btn btn-primary" href="{{asset($stc->pdf)}}" target="_blank">mimoire</a></td>
                @endif

                @if ($stc->pdf == null)
                <td>attestation</td>
                @else
                <td><a class="btn btn-primary" href="st/{{$stc->id}}" target="_blank">attestation</a></td>
                @endif
                

                <td>{{$stc->periode_de_stage_du}}</td>
                <td>{{$stc->periode_de_stage_au}}</td>

              <td>
                 {{----}} <button class="btnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
                

              </td>

              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <form action="/stf/{{$stc->id}}" method="post">
                 @csrf
                 @method('PUT')
                  <input class="d-none" type="number" value="{{3}}" name="etat_stagiaire">
                  <button type="submit" class="btn btn-success">Cloturer</button>
                </form>

                <form action="/st/{{$stc->id}}" method="post">
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
 
  <!-- Modal -->
  <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" id="editForm" action="/st" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">



 
            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="Mname"
                  name="nom"

                />
                <label for="Mname">nom</label>
              </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="Mprenom"
                name="prenom"
                required

              />
              <label for="Mprenom">prenom</label>
            </div>


            <div class="mb-1 form-floating">
              <input
                type="date"
                min="1930-01-01"
                max="2099-12-31"
                class="form-control"
                placeholder="date_n"
                id="Mdate"
                name="date_naissence"
                required

              />
              <label for="Mdate">date de naissance</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="lieu_n"
                id="Mlieu"
                name="lieu_naissence"
                required

              />
              <label for="Mlieu">lieu de naissance</label>
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
                  placeholder="niveau"
                  id="Mniveau"
                  name="niveau_scolaire"
                  required
                />
                <label for="Mniveau">niveau</label>
              </div>

              <div class="mb-1 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="1"
                  id="etat_stagiaire"
                  name="etat_stagiaire"
                  required
                />
                <label for="etat_stagiaire">etat_stagiaire</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="Mdiplome"
                  name="diplome"
                  required
                />
                <label for="Mdiplome">diplome</label>
              </div>


              {{-- continue --}}
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="specialité"
                id="Mspecialite"
                name="specialite"
                required
              />
              <label for="Mspecialite">specialité</label>
            </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="departement"
              id="Mdirection"
              name="direction"
              required

            />
            <label for="Mdirection">departement</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="theme"
              id="Mtheme"
              name="theme"
              required
            />
            <label for="Mtheme">theme</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="tuteur"
              id="Mtuteur"
              name="nom_et_prenom_tuteur"
              required

            />
            <label for="Mteuteur">tuteur</label>
          </div>

          <div class="mb-1 form-floating">  
            <input
              type="number"
              class="form-control"
              placeholder="duree de stage"
              id="Mduree"
              name="duree_stage"
              required
            />
            <label for="Mduree">duree de stage(mois)</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="date"
              min="1930-01-01"
                max="2099-12-31"
              class="form-control"
              placeholder="date de debut"
              id="Mperiode_de_stage_du"
              name="periode_de_stage_du"
              required

            />
            <label for="Mperiode_de_stage_du">date de debut</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="date"
                min="1930-01-01"
                max="2099-12-31"
                class="form-control"
                placeholder="date de fin"
                id="Mperiode_de_stage_au"
                name="periode_de_stage_au"
                required

              />
              <label for="Mperiode_de_stage_au">date de fin</label>
            </div>

            <div class="mb-3">
              <label for="pformFile" class="form-label">Ajouter memoire</label>
              <input class="form-control" type="file" id="pformFile" name="pdf">
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
            var cell7 = $(currentTds).eq(6).text();
            var cell8 = $(currentTds).eq(7).text();

            var cell9 = $(currentTds).eq(8).text();
            var cell10 = $(currentTds).eq(9).text();
            var cell11 = $(currentTds).eq(10).text();
            var cell12 = $(currentTds).eq(11).text();
            var cell13 = $(currentTds).eq(12).text();
            var cell14 = $(currentTds).eq(15).text();
            var cell15 = $(currentTds).eq(16).text();

            
            $("#Mname").val(cell2);
            $("#Mprenom").val(cell3);
            $("#Mdate").val(cell4);
            $("#Mlieu").val(cell5);
            $("#Memail").val(cell6);
            $("#Mniveau").val(cell7);
            $("#Mdiplome").val(cell8);

            $("#Mspecialite").val(cell9);
            $("#Mdirection").val(cell10);
            $("#Mtheme").val(cell11);
            $("#Mtuteur").val(cell12);
            $("#Mduree").val(cell13);
            $("#Mperiode_de_stage_du").val(cell14);
            $("#Mperiode_de_stage_au").val(cell15);

            $("#editForm").attr('action','/st/'+cell1);
            $("#EditModal").modal('show');
        });



        </script>
  
    </body>
</html>
