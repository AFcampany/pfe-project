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

        <input class="form-control form-control-dark w-100" type="text" placeholder="rechercher" aria-label="Search">
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
                        <a class="nav-link" href="/apf">
                          <span data-feather="file-text"></span>
                          fin de stage
                        </a>
                      </li>
        
                      
                </ul>
              </div>
            </nav>
          </div>
        </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>liste des paies de {{$stcs->nom}} {{$stcs->prenom}}</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">nom et prenom de l'agent pointer</th>
                <th scope="col">date pointage</th>
                <th scope="col">semestre</th>
                <th scope="col">nombre absence</th>
                <th scope="col">montant</th>


            </tr>
          </thead>
          <tbody>
            @foreach ($stcs->paies as $paie)
            <tr>
                @foreach ($agds as $agd)
                @if($agd->id == $paie['agent_id'])
                <td>{{$agd->name}} {{$agd->pre_name}}</td>
                @endif
                @endforeach
                @foreach ($ps as $p)
                @if($p->id == $paie['pointage_id'])
                <td>{{$p->period}}</td>
                @endif
                @endforeach
            

                
              <td>{{$paie['semester']}}</td>


                @foreach ($ps as $p)
                @if($p->id == $paie['pointage_id'])
                <td>{{$p->nbr_absence}}</td>
                @endif
                @endforeach



              <td class="d">{{$paie['montant']}}</td>
                
              
            </tr>   
            
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>totale</td>
              <td id="totale">
               
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
 
  <!-- Modal -->
  

{{----}}

    <script src="{{asset('dist/app.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="{{asset('js/dashboard.js')}}"></script>
  
        <script src="{{asset('dist/jquery-3.6.0.js')}}"></script>

        <script>
          
            var dz = document.querySelectorAll("td.d");
            var s = document.getElementById("totale");
            var sum=0;
            for(var i=0;i<dz.length; i++){
              sum= sum + parseInt(dz[i].innerHTML);
            }
            
           console.log(sum);
            s.innerHTML=sum
            
          
        </script>
    </body>
</html>
