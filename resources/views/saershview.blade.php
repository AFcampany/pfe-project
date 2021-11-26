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
                <a class="nav-link active" href="/#">
                  <span data-feather="file-text"></span>
                 apprentis
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
                <a class="nav-link" href="/apf">
                  <span data-feather="file-text"></span>
                  fin de stage
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="/#">
                  <span data-feather="file-text"></span>
                  stagiaires
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
                <a class="nav-link" href="st">
                  <span data-feather="file-text"></span>
                  liste des apprentis
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
            
        
        </div>

  {{-- les table de recherche 6 table--}}    
        
            
        @if ($a[0])
            
        

        
            
        <h2>la listes des apprentis</h2>
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

              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>
              <th class="d-none">#</th>

              <th scope="col">paie</th>
              <th scope="col">detail</th>
              <th scope="col">action</th>

            
            </tr>
          </thead>
          <tbody>
            @foreach ($aps as $ap)
            <tr>
                <td class="d-none">{{$ap->id}}</td>
                <td>{{$ap->nom}}</td>
                <td>{{$ap->prenom}}</td>
                <td>{{$ap->periode_de_stage_du}}</td>
                <td>{{$ap->periode_de_stage_au}}</td>
                <td>{{$ap->direction}}</td>

                            @if($ap->diplome == 1)
                            <td>CFPS</td>
                            @elseif($ap->diplome == 2)
                            <td>CAP</td>
                            @elseif($ap->diplome == 3)
                            <td>CMP</td>
                            @elseif($ap->diplome == 4)
                            <td>BT</td>
                            @elseif($ap->diplome == 5)
                            <td>BTS</td>
                            @else
                            <td>error</td>
                            @endif 

                <td>attestation</td>

                <td class="d-none">{{$ap->date_naissence}}</td>
                <td class="d-none">{{$ap->lieu_naissence}}</td>
                <td class="d-none">{{$ap->email}}</td>

                <td class="d-none">{{$ap->num_tel}}</td>
                <td class="d-none">{{$ap->niveau_scolaire}}</td>
                <td class="d-none">{{$ap->etablisement_formation}}</td>

                <td class="d-none">{{$ap->duree_stage}}</td>
                <td class="d-none">{{$ap->code_postale}}</td>
                <td class="d-none">{{$ap->specialite}}</td>

                <td class="d-none">{{$ap->nom_et_prenom_tuteur}}</td>

                <td class="d-none">{{$ap->latests['id']}}</td>
                <td class="d-none">{{$ap->latests['agent_id']}}</td>
                <td class="d-none">{{$ap->latests['apprenti_id']}}</td>
                <td class="d-none">{{$ap->latests['nbr_absence']}}</td>
                <td class="d-none">{{$ap->latests['period']}}</td>

              <td>
                <button type="button" class="btnPaie btn btn-outline-primary" {{--data-bs-toggle="modal" data-bs-target="#paie-modal"--}}>paie</button> 
              </td>

              <td>
                {{----}} <button class="btnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
             </td>


              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <form action="/apf/{{$ap->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <input class="d-none" type="number" value="{{3}}" name="etat_apprenti">
                    <button type="submit" class="btn btn-success">Cloturer</button>
                  </form>

                  <form action="/ap/{{$ap->id}}" method="post">
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

      @endif

      @if ($a[1])
          
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
            @foreach ($sts as $st)
            <tr>
                <td>{{$st->id}}</td>
                <td>{{$st->nom}}</td>
                <td>{{$st->prenom}}</td>
                <td>{{$st->date_naissence}}</td>

                <td class="d-none">{{$st->lieu_naissence}}</td>

                <td class="d-none">{{$st->email}}</td>
                <td class="d-none">{{$st->niveau_scolaire}}</td>
                <td class="d-none">{{$st->diplome}}</td>

                <td class="d-none">{{$st->specialite}}</td>
                <td class="d-none">{{$st->direction}}</td>
                <td class="d-none">{{$st->theme}}</td>
                <td class="d-none">{{$st->nom_et_prenom_tuteur}}</td>
                <td class="d-none">{{$st->duree_stage}}</td>
                <td>memoire</td>
                <td>attestation</td>

                <td>{{$st->periode_de_stage_du}}</td>
                <td>{{$st->periode_de_stage_au}}</td>

              <td>
                 {{----}} <button class="sbtnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
                

              </td>

              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <form action="/stf/{{$st->id}}" method="post">
                 @csrf
                 @method('PUT')
                  <input class="d-none" type="number" value="{{3}}" name="etat_stagiaire">
                  <button type="submit" class="btn btn-success">Cloturer</button>
                </form>

                <form action="/st/{{$st->id}}" method="post">
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

      @endif
      @if ($a[2])
          

      <h2>demande en attente <p style="font-size: 15px">(apprentis)</p></h2>
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
            @foreach ($apcs as $apc)
            <tr>
                <td>{{$apc->id}}</td>
                <td>{{$apc->nom}}</td>
                <td>{{$apc->prenom}}</td>
                <td>{{$apc->date_naissence}}</td>

                <td class="d-none">{{$apc->lieu_naissence}}</td>

                <td>{{$apc->email}}</td>

                <td class="d-none">{{$apc->num_tel}}</td>

                <td>{{$apc->niveau_scolaire}}</td>

                
                  @if($apc->diplome == 1)
                    <td>CFPS</td>
                  @elseif($apc->diplome == 2)
                  <td>CAP</td>
                  @elseif($apc->diplome == 3)
                  <td>CMP</td>
                  @elseif($apc->diplome == 4)
                  <td>BT</td>
                  @elseif($apc->diplome == 5)
                  <td>BTS</td>
                  @else
                  <td>error</td>
                  @endif
                <td class="d-none">{{$apc->etablisement_formation}}</td>

                <td>
                  @if ($apc->avis == 0)
                  pas encore
                  @else
                    @if ($apc->avis == 1)
                      favorable
                    @else
                      defavorable
                    @endif
                      
                  @endif

                </td>

                <td class="d-none">{{$apc->etablisement_formation}}</td>
                <td class="d-none">{{$apc->duree_stage}}</td>
                <td class="d-none">{{$apc->direction}}</td>


              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                 {{----}} <button class="pbtnEdit btn btn-sm btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>accepter</button>
                
                  <form action="/apr/{{$apc->id}}" method="post">
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
      @endif
      @if ($a[3])
    

      <h2>demande en attente<p style="font-size: 15px">(stagiaires)</p></h2>
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

                <td class="d-none">{{$stc->lieu_naissence}}</td>

                <td>{{$stc->email}}</td>
                <td>{{$stc->niveau_scolaire}}</td>
                <td>{{$stc->diplome}}</td>

              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                 {{----}} <button class="tbtnEdit btn btn-sm btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>accepter</button>
                
                  <form action="/str/{{$stc->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <input class="d-none" type="number" value="{{2}}" name="etat_stagiaire">

                    <button type="submit" class="btn btn-danger">refusé</button>
                  </form>
                  
                </div>
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
    
        
    @endif
    @if ($a[4])
    


      <h2>fin de stage<p style="font-size: 15px">(apprentis)</p></h2>
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
            @foreach ($apfs as $apf)
            <tr>
              <td class="d-none">{{$apf->id}}</td>
              <td>{{$apf->nom}}</td>
              <td>{{$apf->prenom}}</td>
              <td>{{$apf->periode_de_stage_du}}</td>
              <td>{{$apf->periode_de_stage_au}}</td>
              <td>{{$apf->direction}}</td>

                          @if($apf->diplome == 1)
                          <td>CFPS</td>
                          @elseif($apf->diplome == 2)
                          <td>CAP</td>
                          @elseif($apf->diplome == 3)
                          <td>CMP</td>
                          @elseif($apf->diplome == 4)
                          <td>BT</td>
                          @elseif($apf->diplome == 5)
                          <td>BTS</td>
                          @else
                          <td>error</td>
                          @endif 

              <td>attestation</td>

              <td class="d-none">{{$apf->date_naissence}}</td>
              <td class="d-none">{{$apf->lieu_naissence}}</td>
              <td class="d-none">{{$apf->email}}</td>

              <td class="d-none">{{$apf->num_tel}}</td>
              <td class="d-none">{{$apf->niveau_scolaire}}</td>
              <td class="d-none">{{$apf->etablisement_formation}}</td>

              <td class="d-none">{{$apf->duree_stage}}</td>
              <td class="d-none">{{$apf->code_postale}}</td>
              <td class="d-none">{{$apf->specialite}}</td>

              <td class="d-none">{{$apf->nom_et_prenom_tuteur}}</td>

              <td>
                 {{----}} <button class="rbtnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
                
              </td>
            </tr>   
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
      @if ($a[5])
    

      <h2>fin de stage<p style="font-size: 15px">(stagiaires)</p></h2>
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
              <th scop="col">niveau</th>
              <th scop="col">diplome</th>
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
          @foreach ($stfs as $stf)
          <tr>
              <td>{{$stf->id}}</td>
              <td>{{$stf->nom}}</td>
              <td>{{$stf->prenom}}</td>
              <td>{{$stf->date_naissence}}</td>

              <td class="d-none">{{$stf->lieu_naissence}}</td>

              <td>{{$stf->email}}</td>
              <td>{{$stf->niveau_scolaire}}</td>
              <td>{{$stf->diplome}}</td>

              <td class="d-none">{{$stf->specialite}}</td>
              <td class="d-none">{{$stf->direction}}</td>
              <td class="d-none">{{$stf->theme}}</td>
              <td class="d-none">{{$stf->nom_et_prenom_tuteur}}</td>
              <td class="d-none">{{$stf->duree_stage}}</td>
              <td class="d-none">{{$stf->periode_de_stage_du}}</td>
              <td class="d-none">{{$stf->periode_de_stage_au}}</td>

            <td>
               {{----}} <button class="gbtnEdit btn btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
            </td>

            
          </tr>   
          @endforeach
        </tbody>
      </table>
    </div>

        @endif


    </main>
  </div>
</div>






<div class="modal fade" id="paieModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Completer les informations de la paie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="paieForm" action="/paie" method="POST">
        @csrf
      <div class="modal-body">
           
              <div class="mb-1 form-floating">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="periode"
                    id="aMperiode"
                    required
                  />
                  <label for="periode">periode de pointage</label>
                </div>






                <div class="mb-1 form-floating d-none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="semestre"
                    id="aMdp"
                    name="id_pointage"
                    required
                  />
                  <label for="Mdp">pointage id</label>
                </div>

                <div class="mb-1 form-floating d-none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="semestre"
                    id="aMda"
                    name="id_agent"
                    required
                  />
                  <label for="Mda">agent id</label>
                </div>

                <div class="mb-1 form-floating d-none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="semestre"
                    id="aMdr"
                    name="id_apprenti"
                    required
                  />
                  <label for="Mdr">apprenti id</label>
                </div>




              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="semestre"
                  id="aMsemestre"
                  name="semester"
                  required
                />
                <label for="Msemestre">semestre</label>
              </div>
            
                <div class="mb-1 form-floating">
                  <input
                    type="salaire-de-base"
                    class="form-control"
                    placeholder="salaire-de-base"
                    id="aMpaie"
                    name="paie_de_base"
                    required
                  />
                  <label for="Mpaie">salaire de base</label>
                </div>

                <div class="mb-1 form-floating">
                    <input
                      type="number"
                      class="form-control"
                      placeholder="nbr-absence"
                      id="aMnbr"
                      required
                    />
                    <label for="Mnbr">nombre d'absence</label>
                  </div>

                <div class="mb-1 form-floating">
                  <input
                    type="number"
                    class="form-control"
                    placeholder="montant"
                    id="aMmontant"
                    name="montant"
                    required
                  />
                  <label for="Mmontant">montant</label>
                </div>

                <div class="mb-1 form-floating d-none">
                  <input
                    type="number"
                    class="form-control"
                    placeholder="montant"
                    id="aMpourcentage"
                    name="pourcentage"
                    required
                  />
                  <label for="Mpourcentage">porcentage</label>
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




 
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="sized-form" id="editForm" action="/ap" method="post">
                @csrf
                @method('PUT')
            <div class="modal-body">

                <div class="mb-1 form-floating">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="name"
                      id="aMname"
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
                    id="aMprenom"
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
                    id="aMdate"
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
                    id="aMlieu"
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
                      id="aMemail"
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
                      id="aMnum_tel"
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
                      id="aMdirection"
                      name="direction"
                      required
                    />
                    <label for="Mdirection">departement</label>
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
                      id="aMniveau"
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
                      id="aMetat_apprenti"
                      name="etat_apprenti"
                      required
                    />
                    <label for="etat_apprenti">etat_apprenti</label>
                  </div>

                  <div class="selDiv mb-1 form-floating">
                    <select class="form-select" id="aMdpr" name="diplome" aria-label="Default select example" onchange="populate(this.id,'rp')">
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
                    <select class="mdiv form-select" id="rp" name="duree_stage" aria-label="Default select example">
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
                      id="aMcode"
                      name="code_postale"
                      required
                    />
                    <label for="Mcode">code postale</label>
                  </div>

                <div class="mb-1 form-floating">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="specialité"
                    id="aMspec"
                    name="specialite"
                    required
                  />
                  <label for="Mspec">specialité</label>
                </div>

            
              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="teuteur"
                  id="aMtuteur"
                  name="nom_et_prenom_tuteur"
                  required

                />
                <label for="Mtuteur">teuteur</label>
              </div>

              
              <div class="mb-1 form-floating">
                <input
                  type="date"
                  class="form-control"
                  placeholder="date de debut"
                  id="aMdateD"
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
                    id="aMdateF"
                    name="periode_de_stage_au"
                    required

                  />
                  <label for="periode_de_stage_au">date de fin</label>
                </div>

               <div class="mb-3">
                  <label for="formFile" class="form-label">Ajouter attestation</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-1 form-floating">  
                  <a id="link" href="/paie" class="btn btn-primary btn-sm btn-block">details paie</a>
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

{{--modal stagiaire--}}


<!-- Modal -->
<div class="modal fade" id="sEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" id="seditForm" action="/st" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">



 
            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="sMname"
                  name="nom"

                />
                <label for="Mname">nom</label>
              </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="sMprenom"
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
                id="sMdate"
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
                id="sMlieu"
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
                  id="sMemail"
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
                  id="sMniveau"
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
                  id="setat_stagiaire"
                  name="etat_stagiaire"
                  required
                />
                <label for="etat_stagiaire">etat_stagiaire</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="sMdiplome"
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
                id="sMspecialite"
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
              id="sMdirection"
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
              id="sMtheme"
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
              id="sMtuteur"
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
              id="sMduree"
              name="duree_stage"
              required
            />
            <label for="Mduree">duree de stage(mois)</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de debut"
              id="sMperiode_de_stage_du"
              name="periode_de_stage_du"
              required

            />
            <label for="Mperiode_de_stage_du">date de debut</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date de fin"
                id="sMperiode_de_stage_au"
                name="periode_de_stage_au"
                required

              />
              <label for="Mperiode_de_stage_au">date de fin</label>
            </div>

            <div class="mb-3">
              <label for="formFile" class="form-label">Ajouter memoire</label>
              <input class="form-control" type="file" id="formFile" name="pdf">
            </div>
            
            <div class="mb-3">
              <label for="formFile" class="form-label">Ajouter attestation</label>
              <input class="form-control" type="file" id="formFile">
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
<div class="modal fade" id="pajouter-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  id="apname"
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
                id="apprenom"
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
                id="apdate_n"
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
                id="aplieu_n"
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
                  id="apemail"
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
                  id="apnum-tel"
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
                  id="apdepartement"
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
                  id="apniveau"
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
                  id="apetat_apprenti"
                  name="etat_apprenti"
                  required
                />
                <label for="etat_apprenti">etat_apprenti</label>
              </div>

              <div class="mb-1 form-floating">
                <select class="form-select" id="adp" required name="diplome" aria-label="Default select example" onchange="populate(this.id,'arp')">
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
                <select class="form-select" required id="arp" name="duree_stage" aria-label="Default select example">
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
  <div class="modal fade" id="pEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" id="peditForm" action="/apc" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">

            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="pMname"
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
                id="pMprenom"
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
                id="pMdate"
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
                id="pMlieu"
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
                  id="pMemail"
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
                  id="pMnum_tel"
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
                  id="pMdirection"
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
                  id="pMniveau"
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
                  id="pMetat_apprenti"
                  name="etat_apprenti"
                  required
                />
                <label for="etat_apprenti">etat_apprenti</label>
              </div>

              <div class="pselDiv mb-1 form-floating">
                <select class="form-select" required id="pMdp" name="diplome" aria-label="Default select example" onchange="populate(this.id,'pMrp')">
                  <option selected disabled value>deplome prépareé</option>
                  <option value="1">CFPS</option>
                  <option value="2">CAP</option>
                  <option value="3">CMP</option>
                  <option value="4">BT</option>
                  <option value="5">BTS</option>
                </select>
              </div>

              <div class="pselviv mb-1 form-floating">
                <select class="form-select" required name="etablisement_formation" aria-label="Default select example">
                  <option selected disabled value>etablisement de formation</option>
                  <option value="1">CFPA</option>
                  <option value="2">INSFP</option>
                </select>
              </div>
             
             
              <div class="mb-1 form-floating">
                <select class="pmdiv form-select" required id="pMrp" name="duree_stage" aria-label="Default select example">
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
                  id="pcode_postale"
                  name="code_postale"
                  required
                />
                <label for="code_postale">code postale</label>
              </div>

            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="specialité"
                id="pspecialité"
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
              id="pMteuteur"
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
              id="pperiode_de_stage_du"
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
                id="pperiode_de_stage_au"
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


  <!-- Modal -->
  <div class="modal fade" id="tEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="sized-form" id="teditForm" action="/stc" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">


            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="tMname"
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
                id="tMprenom"
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
                id="tMdate"
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
                id="tMlieu"
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
                  id="tMemail"
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
                  id="tMniveau"
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
                  id="tetat_stagiaire"
                  name="etat_stagiaire"
                  required
                />
                <label for="etat_stagiaire">etat_stagiaire</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="tMdiplome"
                  name="diplome"
                  required
                />
                <label for="diplome">diplome</label>
              </div>


              {{-- continue --}}
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="specialité"
                id="tspecialité"
                name="specialite"
                required
              />
              <label for="specialité">specialité</label>
            </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="departement"
              id="tdepartement"
              name="direction"
              required

            />
            <label for="direction">departement</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="theme"
              id="ttheme"
              name="theme"
              required
            />
            <label for="theme">theme</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="teuteur"
              id="tMteuteur"
              name="nom_et_prenom_tuteur"
              required

            />
            <label for="teuteur">teuteur</label>
          </div>

          <div class="mb-1 form-floating">  
            <input
              type="number"
              class="form-control"
              placeholder="duree de stage"
              id="tduree"
              name="duree_stage"
              required
            />
            <label for="duree">duree de stage(mois)</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de debut"
              id="tperiode_de_stage_du"
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
                id="tperiode_de_stage_au"
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




  <div class="modal fade" id="rEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  id="rMname"
                  name="nom"
  
                />
                <label for="Mname">nom</label>
              </div>
  
  
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="rMprenom"
                name="prenom"
  
              />
              <label for="Mprenom">prenom</label>
            </div>
  
  
            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date_n"
                id="rMdate"
                name="date_naissence"
  
              />
              <label for="Mdate">date de naissance</label>
            </div>
  
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="lieu_n"
                id="rMlieu"
                name="lieu_naissence"
  
              />
              <label for="Mlieu">lieu de naissance</label>
            </div>
  
            <div class="mb-1 form-floating">
                <input
                  type="email"
                  class="form-control"
                  placeholder="email"
                  id="rMemail"
                  name="email"
  
                />
                <label for="Memail">email</label>
              </div>
  
              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="numero-tel"
                  id="rMnum_tel"
                  name="num_tel"
  
                />
                <label for="Memail">numero-tel</label>
              </div>
  
              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="departement"
                  id="rMdirection"
                  name="direction"
    
                />
                <label for="Mdirection">departement</label>
              </div>
  
              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="niveau"
                  id="rMniveau"
                  name="niveau_scolaire"
                />
                <label for="Mniveau">niveau</label>
              </div>
  
  
  
              <div class="mb-1 form-floating d-none">
                <input
                  type="text"
                  class="form-control d-none"
                  value="1"
                  id="rMetat_apprenti"
                  name="etat_apprenti"
                />
                <label for="etat_apprenti">etat_apprenti</label>
              </div>
  
              <div class="rselDiv mb-1 form-floating">
                <select class="form-select" id="rMdp" name="diplome" aria-label="Default select example" {{--onchange="populate(this.id,'Mrp')"--}}>
                  <option >deplome prépareé</option>
                  <option value="1">CFPS</option>
                  <option value="2">CAP</option>
                  <option value="3">CMP</option>
                  <option value="4">BT</option>
                  <option value="5">BTS</option>
                </select>
              </div>
  
              <div class="rselviv mb-1 form-floating">
                <select class="form-select" name="etablisement_formation" aria-label="Default select example">
                  <option selected>etablisement de formation</option>
                  <option value="1">CFPA</option>
                  <option value="2">INSFP</option>
                </select>
              </div>
             
             
              <div class="mb-1 form-floating">
                <select class="rmdiv form-select" id="rMrp" name="duree_stage" aria-label="Default select example">
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
                  id="rMcode"
                  name="code_postale"
                />
                <label for="Mcode">code postale</label>
              </div>
  
            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="specialité"
                id="rMspec"
                name="specialite"
              />
              <label for="Mspec">specialité</label>
            </div>
  
         
          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="teuteur"
              id="rMtuteur"
              name="nom_et_prenom_tuteur"
  
            />
            <label for="Mtuteur">teuteur</label>
          </div>
  
          
          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de debut"
              id="rMdateD"
              name="periode_de_stage_du"
  
            />
            <label for="periode_de_stage_du">date de debut</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date de fin"
                id="rMdateF"
                name="periode_de_stage_au"
  
              />
              <label for="periode_de_stage_au">date de fin</label>
            </div>
  
            <div class="mb-3">
              <label for="formFile" class="form-label">Ajouter attestation</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-1 form-floating">  
              <button type="button" class="btn btn-primary btn-sm btn-block">details paie</button>
            </div>
            
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="gEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  id="gMname"
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
                id="gMprenom"
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
                id="gMdate"
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
                id="gMlieu"
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
                  id="gMemail"
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
                  id="gMniveau"
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
                  id="getat_stagiaire"
                  name="etat_stagiaire"
                  required
                />
                <label for="etat_stagiaire">etat_stagiaire</label>
              </div>

              <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="gMdiplome"
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
                id="gMspecialite"
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
              id="gMdirection"
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
              id="gMtheme"
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
              id="gMtuteur"
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
              id="gMduree"
              name="duree_stage"
              required
            />
            <label for="Mduree">duree de stage(mois)</label>
          </div>

          <div class="mb-1 form-floating">
            <input
              type="date"
              class="form-control"
              placeholder="date de debut"
              id="gMperiode_de_stage_du"
              name="periode_de_stage_du"
              required

            />
            <label for="Mperiode_de_stage_du">date de debut</label>
          </div>
            <div class="mb-1 form-floating">
              <input
                type="date"
                class="form-control"
                placeholder="date de fin"
                id="gMperiode_de_stage_au"
                name="periode_de_stage_au"
                required

              />
              <label for="Mperiode_de_stage_au">date de fin</label>
            </div>
            
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Annuler</button>
        </div>
      
      </div>
    </div>
  </div>



    <script src="{{asset('dist/app.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{asset('js/dashboard.js')}}"></script>
  
        <script src="{{asset('dist/jquery-3.6.0.js')}}"></script>
        
        <script>



            function populate(s1,s2){
            var s1 = document.getElementById(s1);  
            var s2 = document.getElementById(s2);
            s2.innerHTML ="";

            if(s1.value == "1" || s1.value == "2"){

              var optionArray= ["1|12 mois"];

            }else if(s1.value == "3"){
              var optionArray= ["2|18 mois"];
            }else if(s1.value == "4"){
              var optionArray= ["3|24 mois"];
            }else if(s1.value == "5"){
              var optionArray= ["4|30 mois"];
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
          $(".btnPaie").click(function () {
            debugger;
            var currentTds = $(this).closest("tr").find("td"); // find all td of selected row
            
            //var cell1 = $(currentTds).eq(0).text();//id
            var cell4 = $(currentTds).eq(3).text();//date dubit

            var cell19 = $(currentTds).eq(18).text();// id pointag
            var cell20 = $(currentTds).eq(19).text();// id agent
            var cell21 = $(currentTds).eq(20).text();// id apprenti
            var cell22 = $(currentTds).eq(21).text();// nbr
            var cell23 = $(currentTds).eq(22).text();// periode


            $("#aMdp").val(cell19);//
            $("#aMda").val(cell20);//
            $("#aMdr").val(cell21);//
            $("#aMnbr").val(cell22);//
            $("#aMperiode").val(cell23);//
            
            

            function difference(date1, date2) {  
            const date1utc = Date.UTC(date1.getFullYear(), date1.getMonth(), date1.getDate());
            const date2utc = Date.UTC(date2.getFullYear(), date2.getMonth(), date2.getDate());
            month = 1000*60*60*24*30.461;
            return(date2utc - date1utc)/month
            }

            const date1 = new Date(cell4),
            date2 = new Date(cell23),
            time_difference = difference(date1,date2)
            //console.log(time_difference)
            var smig=20000;
            var pourcentage=[0.2, 0.3, 0.5, 0.6];
            console.log(pourcentage)

            if(time_difference<=6){
              var s=1;
              var sal = smig*pourcentage[0]
              var p=pourcentage[0]*100;
              var monatnt=smig*pourcentage[0]*((30-cell22)/30)

            }else if(time_difference<=12){
              var s=2;
              var sal = smig*pourcentage[1]
              var p=pourcentage[1]*100;
              var monatnt=smig*pourcentage[1]*((30-cell22)/30)

            }else if(time_difference<=24){
              
              if (time_difference<=18) {
                var s=3;
              } else {
                var s=4;
              }
              var sal = smig*pourcentage[2]
              var p=pourcentage[2]*100;
              var monatnt=smig*pourcentage[2]*((30-cell22)/30)

            }else if(time_difference<=30.1){
              var s=5;
              var sal = smig*pourcentage[3]
              var p=pourcentage[3]*100;
              var monatnt=smig*pourcentage[3]*((30-cell22)/30)

            }else{
             console.log("errer or over 30 mois");
            }

            monatnt= parseInt(monatnt);

            $("#aMsemestre").val(s);//
            $("#aMpourcentage").val(p);//
            $("#aMmontant").val(monatnt);//
            $("#aMpaie").val(sal);//

            $("#paieModal").modal('show');
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


              
              $("#aMname").val(cell2);//
              $("#aMprenom").val(cell3);

              $("#aMdateD").val(cell4);
              $("#aMdateF").val(cell5);

              $("#aMdirection").val(cell6);///



              $("#aMdate").val(cell9);//
              $("#aMlieu").val(cell10);//
              $("#aMemail").val(cell11);//
              $("#aMnum_tel").val(cell12);//
              $("#aMniveau").val(cell13);//

              if (cell14 == 1) {//etablisement
              $(".selviv option:eq(1)").prop('selected', true);
              } else if(cell14 == 2){
              $(".selviv option:eq(2)").prop('selected', true);
              }else{
              $(".selviv option:eq(0)").prop('selected', true);
              }
              $("#aMcode").val(cell16);//
              $("#aMspec").val(cell17);//
              $("#aMtuteur").val(cell18);//


  
  
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
              $("#editForm").attr('action','/ap/'+cell1);
              $("#EditModal").modal('show');
          });
          </script>


<script>
    $(".sbtnEdit").click(function () {
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

        
        $("#sMname").val(cell2);
        $("#sMprenom").val(cell3);
        $("#sMdate").val(cell4);
        $("#sMlieu").val(cell5);
        $("#sMemail").val(cell6);
        $("#sMniveau").val(cell7);
        $("#sMdiplome").val(cell8);

        $("#sMspecialite").val(cell9);
        $("#sMdirection").val(cell10);
        $("#sMtheme").val(cell11);
        $("#sMtuteur").val(cell12);
        $("#sMduree").val(cell13);
        $("#sMperiode_de_stage_du").val(cell14);
        $("#sMperiode_de_stage_au").val(cell15);

        $("#seditForm").attr('action','/st/'+cell1);
        $("#sEditModal").modal('show');
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


    /*function popul(s1,s2){
      var s1 = document.getElementById(s1);  
      var s2 = document.getElementById(s2);
      s2.innerHTML ="";
      if(s1.value == "1" || s1.value == "2"){
        var optionArray= ["1|12 mois"];
        setInputDateM("#pperiode_de_stage_au",12);

      }else if(s1.value == "3"){
        var optionArray= ["2|18 mois"];
        setInputDateM("#pperiode_de_stage_au",18);

      }else if(s1.value == "4"){
        var optionArray= ["3|24 mois"];
        setInputDateM("#pperiode_de_stage_au",24);

      }else if(s1.value == "5"){
        var optionArray= ["4|30 mois"];
        setInputDateM("#pperiode_de_stage_au",30);

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
    }*/
    


  </script>  

  <script>
  $(".pbtnEdit").click(function () {
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

      
      $("#pMname").val(cell2);
      $("#pMprenom").val(cell3);
      $("#pMdate").val(cell4);
      $("#pMlieu").val(cell5);
      $("#pMemail").val(cell6);

      $("#pMnum_tel").val(cell7);

      $("#pMniveau").val(cell8);
      $("#pMdirection").val(cell11);


      var s2 = document.getElementById('pMrp');
      setInputDate("#pperiode_de_stage_du");


      if (cell9 == "CFPS") {

        $(".pselDiv option:eq(1)").prop('selected', true);
        $(".pmdiv option:eq(1)").prop('selected', true);
        setInputDateM("#pperiode_de_stage_au",12);

      } else if(cell9 == "CAP"){

        $(".pselDiv option:eq(2)").prop('selected', true);
        $(".pmdiv option:eq(1)").prop('selected', true);
        setInputDateM("#pperiode_de_stage_au",12);

        
      } else if(cell9 == "CMP"){

        $(".pselDiv option:eq(3)").prop('selected', true);
        $(".pmdiv option:eq(2)").prop('selected', true);
        setInputDateM("#pperiode_de_stage_au",18);

       
      } else if(cell9 == "BT"){

        $(".pselDiv option:eq(4)").prop('selected', true);
        $(".pmdiv option:eq(3)").prop('selected', true);
        setInputDateM("#pperiode_de_stage_au",24);

        
      } else if(cell9 == "BTS"){

        $(".pselDiv option:eq(5)").prop('selected', true);
        $(".pmdiv option:eq(4)").prop('selected', true);
        setInputDateM("#pperiode_de_stage_au",30);

        
      }else{
        $(".pselDiv option:eq(0)").prop('selected', true);

      }

      if (cell10 == 1) {
        $(".pselviv option:eq(1)").prop('selected', true);
      } else if(cell10 == 2){
      $(".pselviv option:eq(2)").prop('selected', true);
      }else{
      $(".pselviv option:eq(0)").prop('selected', true);
      }



      
      


      $("#peditForm").attr('action','/apc/'+cell1);
      $("#pEditModal").modal('show');
  });
  </script>


<script>
    $(".tbtnEdit").click(function () {
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

        
        $("#tMname").val(cell2);
        $("#tMprenom").val(cell3);
        $("#tMdate").val(cell4);
        $("#tMlieu").val(cell5);
        $("#tMemail").val(cell6);
        $("#tMniveau").val(cell7);
        $("#tMdiplome").val(cell8);

        $("#teditForm").attr('action','/stc/'+cell1);
        $("#tEditModal").modal('show');
    });



    </script>


    <script>
        

    $(".rbtnEdit").click(function () {
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




          
          $("#rMname").val(cell2);//
          $("#rMprenom").val(cell3);

          $("#rMdateD").val(cell4);
          $("#rMdateF").val(cell5);

          $("#rMdirection").val(cell6);///



          $("#rMdate").val(cell9);//
          $("#rMlieu").val(cell10);//
          $("#rMemail").val(cell11);//
          $("#rMnum_tel").val(cell12);//
          $("#rMniveau").val(cell13);//

          if (cell14 == 1) {//etablisement
          $(".rselviv option:eq(1)").prop('selected', true);
          } else if(cell14 == 2){
          $(".rselviv option:eq(2)").prop('selected', true);
          }else{
          $(".rselviv option:eq(0)").prop('selected', true);
          }
          $("#rMcode").val(cell16);//
          $("#rMspec").val(cell17);//
          $("#rMtuteur").val(cell18);//




          var s2 = document.getElementById('rMrp');

          if (cell7 == "CFPS") {

            $(".rselDiv option:eq(1)").prop('selected', true);
            $(".rmdiv option:eq(1)").prop('selected', true);

          } else if(cell7 == "CAP"){

            $(".rselDiv option:eq(2)").prop('selected', true);
            $(".rmdiv option:eq(1)").prop('selected', true);

            
          } else if(cell7 == "CMP"){

            $(".rselDiv option:eq(3)").prop('selected', true);
            $(".rmdiv option:eq(2)").prop('selected', true);

           
          } else if(cell7 == "BT"){

            $(".rselDiv option:eq(4)").prop('selected', true);
            $(".rmdiv option:eq(3)").prop('selected', true);

            
          } else if(cell7 == "BTS"){

            $(".rselDiv option:eq(5)").prop('selected', true);
            $(".rmdiv option:eq(4)").prop('selected', true);

            
          }else{
            $(".rselDiv option:eq(0)").prop('selected', true);

          }

          



          


          $("#rEditModal").modal('show');
      });


    </script>


<script>
    $(".gbtnEdit").click(function () {
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
        var cell14 = $(currentTds).eq(13).text();
        var cell15 = $(currentTds).eq(14).text();

        
        $("#gMname").val(cell2);
        $("#gMprenom").val(cell3);
        $("#gMdate").val(cell4);
        $("#gMlieu").val(cell5);
        $("#gMemail").val(cell6);
        $("#gMniveau").val(cell7);
        $("#gMdiplome").val(cell8);

        $("#gMspecialite").val(cell9);
        $("#gMdirection").val(cell10);
        $("#gMtheme").val(cell11);
        $("#gMtuteur").val(cell12);
        $("#gMduree").val(cell13);
        $("#gMperiode_de_stage_du").val(cell14);
        $("#gMperiode_de_stage_au").val(cell15);

        $("#gEditModal").modal('show');
    });



    </script>
  
    </body>
</html>
