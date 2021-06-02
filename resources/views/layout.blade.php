<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iDoList</title>
        {{-- Fonts --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        

</script>
        </script>
        <style>

            @import url('https://fonts.googleapis.com/css2?family=Neucha&display=swap');
            body {
        overflow-x: hidden;
        }
        div a.active {
        border-bottom: 5px solid #338ecf;
        background: #696969
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }
        
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
         }
         .btn-warning1{
            color:white;
            background-color: #db4c3f;
            border: 1px #db4c3f;
         }
         .btnNav{
            color:white;
            background-color: #db4c3f;
            border: 1px #db4c3f;
         }
         .topnav {
            overflow: hidden;
            background-color: #333;
         }

         .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
         }

          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }

          .topnav a.active {
            background-color: #04AA6D;
            color: white;
          }
          .orangeBG{
          background-color: #db4c3f;
          border-color: #db4c3f; 
          color: white;
          }
        }
        </style>

    </head>
    <body class="antialiased">
        <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><h1 style="font-family: 'Neucha', cursive; text-align: center;">iDoList</h1></div>
        <div class="list-group list-group-flush">
       
              
            <div class="sidebar">
            <a class="list-group-item list-group-item-action bg-light" href="{{ route('index') }}"> <i class="fas fa-home"></i> Home</a>
            <a class="list-group-item list-group-item-action bg-light" aria-current="page" href="{{ route('overdue') }}"><i class="fas fa-exclamation-circle  "></i> Overdue Tasks</a>
            <a class="list-group-item list-group-item-action bg-light" aria-current="page" href="{{ route('done') }}"><i class="fas fa-check-circle  "></i> Finished Tasks</a>
            </div>    
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav  class="navbar navbar-expand-lg navbar-light  border-bottom" style="background-color: #DB4C3F; ">
            <button class="btn btnNav" id="menu-toggle" height="50px" width="200px">☰</button>
            
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white;"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                </li>
            </ul>
            </div>
        </nav>
        <div class="container-fluid">
       
          {{-- Body --}}
        <div class="container p-5">
            @yield('main-content')
        </div>
        </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>

        


        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>