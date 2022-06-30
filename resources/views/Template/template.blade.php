<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Citriapp</title>
  </head>
  <body>
    <ul class="nav justify-content-le">

        <li class="nav-item">
          <a class="nav-link" href="{{url('http://127.0.0.1:8000')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('agricultor.create')}}" method="post">Agricultor</a>
        </li>
        <a class="nav-link" href="{{''}}" method="post">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{''}}" method="post">Salir</a>
          </li>
         
            </li>
          </li>
      </ul>
      <div>
        @yield('plantillaweb')
      </div>
     
    </div>