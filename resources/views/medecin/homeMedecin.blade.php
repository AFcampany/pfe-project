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

        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Sign out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        </div>
        </header>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>avis de medecin</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">date-n</th>
                <th scope="col">departement</th>

                
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
                <td>{{$stc->direction}}</td>
                
              <td>
                 {{----}} <button class="btnEdit btn btn-sm btn-primary"{{-- data-bs-toggle="modal" data-bs-target="#modifier-modal"--}}>Plus</button> 
                

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
          <h5 class="modal-title" id="exampleModalLabel">Completer les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">

            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="id apprenti"
                  id="Mid"

                />
                <label for="Mname">id apprenti</label>
              </div>


 
            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="Mname"

                />
                <label for="Mname">nom</label>
              </div>


            <div class="mb-1 form-floating">
              <input
                type="text"
                class="form-control"
                placeholder="prenom"
                id="Mprenom"

              />
              <label for="Mprenom">prenom</label>
            </div>

            <div class="mb-1 form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="date naissance"
                  id="Mdate"
    
                />
                <label for="Mdate">date naissance</label>
            </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="departement"
              id="Mdirection"

            />
            <label for="Mdirection">departement</label>
            </div>


            <form class="sized-form" id="editForm" action="/med" method="post">
            @csrf
            @method('PUT')


            <div class="mb-1 form-floating">
                <select class="form-select" name="avis" aria-label="Default select example">
                 <option selected>avis</option>
                  <option value="1">avis favorable</option>
                  <option value="2">avis défavorable</option>
                </select>
              </div>

          <div class="mb-1 form-floating">
            <input
              type="text"
              class="form-control"
              placeholder="observation"
              id="Mobservation"
              name="observation"

            />
            <label for="Mobservation">observation</label>
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
        $(".btnEdit").click(function () {
            debugger;
            var currentTds = $(this).closest("tr").find("td"); // find all td of selected row
            
            var cell1 = $(currentTds).eq(0).text();
            var cell2 = $(currentTds).eq(1).text(); // eq= cell , text = inner text
            var cell3 = $(currentTds).eq(2).text();
            var cell4 = $(currentTds).eq(3).text(); 
            var cell5 = $(currentTds).eq(4).text(); 

            
            $("#Mid").val(cell1);
            $("#Mname").val(cell2);
            $("#Mprenom").val(cell3);
            $("#Mdate").val(cell4);
            $("#Mdirection").val(cell5);

           

            $("#editForm").attr('action','/med/'+cell1);
            $("#EditModal").modal('show');
        });



        </script>
  
    </body>
</html>
