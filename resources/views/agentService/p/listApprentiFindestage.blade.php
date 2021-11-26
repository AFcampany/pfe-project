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
                <a class="nav-link" href="/apr">
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
                <a class="nav-link active" href="#">
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

                <form class="d-none" id="time" action="/apf" method="GET">
                <input class="d-none" type="text" id="t" name="type" value="0">
                </form>
                
              </ul>
            </div>
        
        </div>

      

        <h2>fin de stage</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th class="d-none">#</th>

              <th scope="col">nom</th>
              <th scope="col">prenom</th>
              <th scope="col">date-d</th>
              <th scope="col">date-f</th>
              <th scope="col">direction</th>
              <th scope="col">diplome</th>
              <th scope="col">attestation</th>


              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>

              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>

              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>
              
              <th class="d-none">#</th>

              <th scope="col">detail</th>
 

            </tr>
          </thead>
          <tbody>
            @foreach ($stcs as $stc)
            <tr>
              <td class="d-none">{{$stc->id}}</td>
              <td>{{$stc->nom}}</td>
              <td>{{$stc->prenom}}</td>
              <td>{{$stc->periode_de_stage_du}}</td>
              <td>{{$stc->periode_de_stage_au}}</td>
              <td>{{$stc->direction}}</td>

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

                          <td><a class="btn btn-primary" href="ap/{{$stc->id}}" target="_blank">attestation</a></td>

              <td class="d-none">{{$stc->date_naissence}}</td>
              <td class="d-none">{{$stc->lieu_naissence}}</td>
              <td class="d-none">{{$stc->email}}</td>

              <td class="d-none">{{$stc->num_tel}}</td>
              <td class="d-none">{{$stc->niveau_scolaire}}</td>
              <td class="d-none">{{$stc->etablisement_formation}}</td>

              <td class="d-none">{{$stc->duree_stage}}</td>
              <td class="d-none">{{$stc->code_postale}}</td>
              <td class="d-none">{{$stc->specialite}}</td>

              <td class="d-none">{{$stc->nom_et_prenom_tuteur}}</td>

              <td>
                 {{----}} <button class="btnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
                
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
 
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
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

              />
              <label for="Memail">numero-tel</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="departement"
                id="Mdirection"
                name="direction"
  
              />
              <label for="Mdirection">departement</label>
            </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="niveau"
                id="Mniveau"
                name="niveau_scolaire"
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
              />
              <label for="etat_apprenti">etat_apprenti</label>
            </div>

            <div class="selDiv mb-1 form-floating">
              <select class="form-select" id="Mdp" name="diplome" aria-label="Default select example" {{--onchange="populate(this.id,'Mrp')"--}}>
                <option >deplome prépareé</option>
                <option value="1">CFPS</option>
                <option value="2">CAP</option>
                <option value="3">CMP</option>
                <option value="4">BT</option>
                <option value="5">BTS</option>
              </select>
            </div>

            <div class="selviv mb-1 form-floating">
              <select class="form-select" name="etablisement_formation" aria-label="Default select example">
                <option selected>etablisement de formation</option>
                <option value="1">CFPA</option>
                <option value="2">INSFP</option>
              </select>
            </div>
           
           
            <div class="mb-1 form-floating">
              <select class="mdiv form-select" id="Mrp" name="duree_stage" aria-label="Default select example">
               <option selected>duree de la formation</option>
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
                id="Mcode"
                name="code_postale"
              />
              <label for="Mcode">code postale</label>
            </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="specialité"
              id="Mspec"
              name="specialite"
            />
            <label for="Mspec">specialité</label>
          </div>

       
        <div class="mb-1 form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="teuteur"
            id="Mtuteur"
            name="nom_et_prenom_tuteur"

          />
          <label for="Mtuteur">teuteur</label>
        </div>

        
        <div class="mb-1 form-floating">
          <input
            type="date"
            class="form-control"
            placeholder="date de debut"
            id="MdateD"
            name="periode_de_stage_du"

          />
          <label for="periode_de_stage_du">date de debut</label>
        </div>
          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de fin"
              id="MdateF"
              name="periode_de_stage_au"

            />
            <label for="periode_de_stage_au">date de fin</label>
          </div>

          <div class="mb-1 form-floating">  
            <a id="link" href="/paie" class="btn btn-primary btn-sm btn-block">details paie</a>
          </div>
          
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Annuler</button>
      </div>
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
              
              var cell1 = $(currentTds).eq(0).text();//id
  
              var cell2 = $(currentTds).eq(1).text();//nom // eq= cell , text = inner text
              var cell3 = $(currentTds).eq(2).text();//prenom
             
              var cell4 = $(currentTds).eq(3).text();//date dubit
              var cell5 = $(currentTds).eq(4).text();//date fin
  
              var cell6 = $(currentTds).eq(5).text();//direction
  
             var cell7 = $(currentTds).eq(6).text();//diplome
               // var cell8 = $(currentTds).eq(7).text();//attestaion

              var cell9 = $(currentTds).eq(8).text();//date n
              var cell10 = $(currentTds).eq(9).text();// lieu n
              var cell11 = $(currentTds).eq(10).text();// email
              var cell12 = $(currentTds).eq(11).text();// tel
              var cell13 = $(currentTds).eq(12).text();// niveux
              var cell14 = $(currentTds).eq(13).text();// etablisement
              //var cell15 = $(currentTds).eq(14).text();// duree
              var cell16 = $(currentTds).eq(15).text();// code postale
              var cell17 = $(currentTds).eq(16).text();// spcailite
              var cell18 = $(currentTds).eq(17).text();// tuteur


  
  
              
              $("#Mname").val(cell2);//
              $("#Mprenom").val(cell3);

              $("#MdateD").val(cell4);
              $("#MdateF").val(cell5);

              $("#Mdirection").val(cell6);///



              $("#Mdate").val(cell9);//
              $("#Mlieu").val(cell10);//
              $("#Memail").val(cell11);//
              $("#Mnum_tel").val(cell12);//
              $("#Mniveau").val(cell13);//

              if (cell14 == 1) {//etablisement
              $(".selviv option:eq(1)").prop('selected', true);
              } else if(cell14 == 2){
              $(".selviv option:eq(2)").prop('selected', true);
              }else{
              $(".selviv option:eq(0)").prop('selected', true);
              }
              $("#Mcode").val(cell16);//
              $("#Mspec").val(cell17);//
              $("#Mtuteur").val(cell18);//


  
  
              var s2 = document.getElementById('Mrp');
  
              if (cell7 == "CFPS") {
  
                $(".selDiv option:eq(1)").prop('selected', true);
                $(".mdiv option:eq(1)").prop('selected', true);
  
              } else if(cell7 == "CAP"){
  
                $(".selDiv option:eq(2)").prop('selected', true);
                $(".mdiv option:eq(1)").prop('selected', true);
  
                
              } else if(cell7 == "CMP"){
  
                $(".selDiv option:eq(3)").prop('selected', true);
                $(".mdiv option:eq(2)").prop('selected', true);
  
               
              } else if(cell7 == "BT"){
  
                $(".selDiv option:eq(4)").prop('selected', true);
                $(".mdiv option:eq(3)").prop('selected', true);
  
                
              } else if(cell7 == "BTS"){
  
                $(".selDiv option:eq(5)").prop('selected', true);
                $(".mdiv option:eq(4)").prop('selected', true);
  
                
              }else{
                $(".selDiv option:eq(0)").prop('selected', true);
  
              }

              
  
  
  
              
  
              $("#link").attr('href','/paie/'+cell1);
              $("#EditModal").modal('show');
          });

        </script>
  
    </body>
</html>
