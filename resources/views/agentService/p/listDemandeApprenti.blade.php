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
                <a class="nav-link active" href="#">
                  <span data-feather="file-text"></span>
                  demande en attente
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/apr">
                  <span data-feather="file-text"></span>
                  demande refusé
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ap">
                  <span data-feather="file-text"></span>
                  listes des apprentis
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
             <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ajouter-modal">ajouter</button> 
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

                <form class="d-none" id="time" action="/apc" method="GET">
                <input class="d-none" type="text" id="t" name="type" value="0">
                </form>
                
              </ul>
            </div>
        
        </div>

      

        <h2>demande en attente</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">date-n</th>

                <th class="d-none" scope="col">lieu-n</th>

                <th scope="col">email</th>

                <th class="d-none" scope="col">num_tel</th>

                <th scop="col">niveau</th>
                <th scop="col">diplome</th>

                <th scop="col">avis</th>

                <th class="d-none" scope="col">etablisement_formation</th>
                <th class="d-none" scope="col">duree_stage</th>
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

                <td>{{$stc->email}}</td>

                <td class="d-none">{{$stc->num_tel}}</td>

                <td>{{$stc->niveau_scolaire}}</td>

                
                  @if($stc->diplome == 1)
                    <td>CFPS</td>
                  @elseif($stc->diplome == 2)
                  <td>CAP</td>
                  @elseif($stc->diplome == 3)
                  <td>CMP</td>
                  @elseif($stc->diplome == 4)
                  <td>BT</td>
                  @elseif($stc->diplome == 5)
                  <td>BTS</td>
                  @else
                  <td>error</td>
                  @endif
                <td class="d-none">{{$stc->etablisement_formation}}</td>

                <td>
                  @if ($stc->avis == 0)
                  pas encore
                  @else
                    @if ($stc->avis == 1)
                      favorable
                    @else
                      defavorable
                    @endif
                      
                  @endif

                </td>

                <td class="d-none">{{$stc->etablisement_formation}}</td>
                <td class="d-none">{{$stc->duree_stage}}</td>
                <td class="d-none">{{$stc->direction}}</td>


              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                  @if ($stc->avis == 1)
                   {{----}} <button class="btnEdit btn btn-sm btn-primary" {{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>accepter</button>

                  @else
                   {{----}} <button class="btnEdit btn btn-sm btn-primary" disabled {{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>accepter</button>

                  @endif
                
                  <form action="/apr/{{$stc->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <input class="d-none" type="number" value="{{2}}" name="etat_apprenti">

                    <button type="submit" class="btn btn-danger">refusé</button>
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
<div class="modal fade" id="ajouter-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Completer les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" method="POST" action="/apc">
        @csrf 
        <div class="modal-body">
  
          
            
            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="name"
                  name="nom"
                  required

                />
                <label for="name">nom</label>
              </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="prenom"
                name="prenom"
                required

              />
              <label for="prenom">prenom</label>
            </div>


            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date_n"
                id="date_n"
                name="date_naissence"
                required

              />
              <label for="date_n">date de naissance</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="lieu_n"
                id="lieu_n"
                name="lieu_naissence"
                required

              />
              <label for="lieu_n">lieu de naissance</label>
            </div>

            <div class="mb-1 form-floating">
                <input
                  type="email"
                  class="form-control"
                  placeholder="email"
                  id="email"
                  name="email"
                  required

                />
                <label for="email">email</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="num-tel"
                  class="form-control"
                  placeholder="numero-tel"
                  id="num-tel"
                  name="num_tel"
                  required
                />
                <label for="num-tel">numero-tel</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  list="listD"
                  placeholder="departement"
                  id="departement"
                  name="direction"
                  required
                />
                <label for="direction">departement</label>
                <datalist id="listD">
                  @foreach ($dirs as $dir)
                  <option value="{{$dir->direction}}">{{$dir->direction}}</option>
                  @endforeach
                </datalist>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="niveau scolaire"
                  id="niveau"
                  name="niveau_scolaire"
                  required
                />
                <label for="niveau">niveau scolaire</label>
              </div>

              <div class="mb-1 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="0"
                  id="etat_apprenti"
                  name="etat_apprenti"
                  required
                />
                <label for="etat_apprenti">etat_apprenti</label>
              </div>

              <div class="mb-1 form-floating">
                <select class="form-select" id="dp" required name="diplome" aria-label="Default select example" onchange="populate(this.id,'rp')">
                  <option selected disabled value>deplome prépareé</option>
                  <option value="1">CFPS</option>
                  <option value="2">CAP</option>
                  <option value="3">CMP</option>
                  <option value="4">BT</option>
                  <option value="5">BTS</option>
                </select>
              </div>

              <div class="mb-1 form-floating">
                <select class="form-select" required name="etablisement_formation" aria-label="Default select example">
                  <option selected disabled value>etablisement de formation</option>
                  <option value="1">CFPA</option>
                  <option value="2">INSFP</option>
                </select>
              </div>
             
             
              <div class="mb-1 form-floating">
                <select class="form-select" required id="rp" name="duree_stage" aria-label="Default select example">
                 {{-- <option selected>duree de la formation</option>
                  <option value="1">12 mois</option>
                  <option value="2">18 mois</option>
                  <option value="3">24 mois</option>
                  <option value="4">30 mois</option>--}}
                </select>
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
        <form class="sized-form" id="editForm" action="/apc" method="post">
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
                name="prenom"
                required

              />
              <label for="Mprenom">prenom</label>
            </div>


            <div class="mb-1 form-floating">
              <input
                type="date"
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
                  placeholder="numero-tel"
                  id="Mnum_tel"
                  name="num_tel"
                  required

                />
                <label for="Memail">numero-tel</label>
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
                <label for="direction">departement</label>
                <datalist id="listD">
                  @foreach ($dirs as $dir)
                  <option value="{{$dir->direction}}">{{$dir->direction}}</option>
                  @endforeach
                </datalist>
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
                  id="Metat_apprenti"
                  name="etat_apprenti"
                  required
                />
                <label for="etat_apprenti">etat_apprenti</label>
              </div>

              <div class="selDiv mb-1 form-floating">
                <select class="form-select" required id="Mdp" name="diplome" aria-label="Default select example" onchange="populate(this.id,'Mrp')">
                  <option selected disabled value>deplome prépareé</option>
                  <option value="1">CFPS</option>
                  <option value="2">CAP</option>
                  <option value="3">CMP</option>
                  <option value="4">BT</option>
                  <option value="5">BTS</option>
                </select>
              </div>

              <div class="selviv mb-1 form-floating">
                <select class="form-select" required name="etablisement_formation" aria-label="Default select example">
                  <option selected disabled value>etablisement de formation</option>
                  <option value="1">CFPA</option>
                  <option value="2">INSFP</option>
                </select>
              </div>
             
             
              <div class="mb-1 form-floating">
                <select class="mdiv form-select" required id="Mrp" name="duree_stage" aria-label="Default select example">
                 <option selected disabled value>duree de la formation</option>
                  <option value="1">12 mois</option>
                  <option value="2">18 mois</option>
                  <option value="3">24 mois</option>
                  <option value="4">30 mois</option>
                </select>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="code postale"
                  id="specialité"
                  name="code_postale"
                  required
                />
                <label for="specialité">code postale</label>
              </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="specialité"
                id="specialité"
                name="specialite"
                required
              />
              <label for="specialité">specialité</label>
            </div>

         
          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="teuteur"
              id="Mteuteur"
              name="nom_et_prenom_tuteur"
              required

            />
            <label for="teuteur">teuteur</label>
          </div>

          
          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de debut"
              id="periode_de_stage_du"
              name="periode_de_stage_du"
              required

            />
            <label for="periode_de_stage_du">date de debut</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date de fin"
                id="periode_de_stage_au"
                name="periode_de_stage_au"
                required

              />
              <label for="periode_de_stage_au">date de fin</label>
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
          function setInputDateM(_id,ma){
          var _dat = document.querySelector(_id);
          var hoy = new Date()
          var    d = hoy.getDate();
          var    m = hoy.getMonth()+1;

          if(ma=== 12){
            var    y = hoy.getFullYear()+1;

          }else if(ma===24){
            var    y = hoy.getFullYear()+2;

          }else if(ma===18){
              if(m<=6){
                m=m+6;
                var    y = hoy.getFullYear()+1;
              }else{
                m=m-6;
                var    y = hoy.getFullYear()+2;
              }
          }else if(ma===30){
            if(m<=6){
                m=m+6;
                var    y = hoy.getFullYear()+2;
              }else{
                m=m-6;
                var    y = hoy.getFullYear()+3;
              }
          }
          
          var    data;

          if(d < 10){
              d = "0"+d;
          };
          if(m < 10){
              m = "0"+m;
          };

          data = y+"-"+m+"-"+d;
          console.log(data);
          _dat.value = data;
          };

          
        </script>

        <script>
          function setInputDate(_id){
          var _dat = document.querySelector(_id);
          var hoy = new Date(),
              d = hoy.getDate(),
              m = hoy.getMonth()+1, 
              y = hoy.getFullYear(),
              data;

          if(d < 10){
              d = "0"+d;
          };
          if(m < 10){
              m = "0"+m;
          };

          data = y+"-"+m+"-"+d;
          console.log(data);
          _dat.value = data;
          };

          
        </script>


        <script>


          function populate(s1,s2){
            var s1 = document.getElementById(s1);  
            var s2 = document.getElementById(s2);
            s2.innerHTML ="";
            if(s1.value == "1" || s1.value == "2"){
              var optionArray= ["1|12 mois"];
              setInputDateM("#periode_de_stage_au",12);

            }else if(s1.value == "3"){
              var optionArray= ["2|18 mois"];
              setInputDateM("#periode_de_stage_au",18);

            }else if(s1.value == "4"){
              var optionArray= ["3|24 mois"];
              setInputDateM("#periode_de_stage_au",24);

            }else if(s1.value == "5"){
              var optionArray= ["4|30 mois"];
              setInputDateM("#periode_de_stage_au",30);

            }else{
              console.log('some think wrong')
            }
            for(option in optionArray){
              var pair = optionArray[option].split("|");
              var newOption = document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s2.options.add(newOption);
            }
          }
          


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

            var cell7 = $(currentTds).eq(6).text();//numtel

            var cell8 = $(currentTds).eq(7).text();
            var cell9 = $(currentTds).eq(8).text();
            var cell10 = $(currentTds).eq(9).text();
            var cell11 = $(currentTds).eq(13).text();

            console.log(cell10);

            
            $("#Mname").val(cell2);
            $("#Mprenom").val(cell3);
            $("#Mdate").val(cell4);
            $("#Mlieu").val(cell5);
            $("#Memail").val(cell6);

            $("#Mnum_tel").val(cell7);

            $("#Mniveau").val(cell8);
            $("#Mdirection").val(cell11);


            var s2 = document.getElementById('Mrp');
            setInputDate("#periode_de_stage_du");


            if (cell9 == "CFPS") {

              $(".selDiv option:eq(1)").prop('selected', true);
              $(".mdiv option:eq(1)").prop('selected', true);
              setInputDateM("#periode_de_stage_au",12);

            } else if(cell9 == "CAP"){

              $(".selDiv option:eq(2)").prop('selected', true);
              $(".mdiv option:eq(1)").prop('selected', true);
              setInputDateM("#periode_de_stage_au",12);

              
            } else if(cell9 == "CMP"){

              $(".selDiv option:eq(3)").prop('selected', true);
              $(".mdiv option:eq(2)").prop('selected', true);
              setInputDateM("#periode_de_stage_au",18);

             
            } else if(cell9 == "BT"){

              $(".selDiv option:eq(4)").prop('selected', true);
              $(".mdiv option:eq(3)").prop('selected', true);
              setInputDateM("#periode_de_stage_au",24);

              
            } else if(cell9 == "BTS"){

              $(".selDiv option:eq(5)").prop('selected', true);
              $(".mdiv option:eq(4)").prop('selected', true);
              setInputDateM("#periode_de_stage_au",30);

              
            }else{
              $(".selDiv option:eq(0)").prop('selected', true);

            }

            if (cell10 == 1) {
              $(".selviv option:eq(1)").prop('selected', true);
            } else if(cell10 == 2){
            $(".selviv option:eq(2)").prop('selected', true);
            }else{
            $(".selviv option:eq(0)").prop('selected', true);
            }



            
            


            $("#editForm").attr('action','/apc/'+cell1);
            $("#EditModal").modal('show');
        });
        </script>
  
    </body>
</html>
