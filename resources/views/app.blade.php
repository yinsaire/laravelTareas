<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mis Tareas</title>
   <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/782/782741.png">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <style>
      body {
         margin: 0;
         padding: 0;
         font-family: sans-serif;
         background-image: url(https://digilopolis.com/blog/wp-content/uploads/2019/09/Las-apps-m%C3%A1s-innovadoras-para-crear-listas-de-tareas.jpg);
         height: 100vh;
         background-position: top center;
         background-size: cover;
      }

      .color-container {
         width: 16px;
         height: 16px;
         display: inline-block;
         border-radius: 4px;
      }

      a {
         text-decoration: none;
      }
   </style>
</head>

<body>
   <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" href="{{ route('categories.index') }}"><strong>Inicio</strong></a>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('categories.index') }}"><strong>Categorias</strong></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('todos') }}"><strong>Tareas</strong></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   @yield('content')
</body>

</html>