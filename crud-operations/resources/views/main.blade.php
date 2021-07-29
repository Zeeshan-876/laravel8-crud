<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="CSS/mycss.css">
          <title>Main Page</title>
     </head>

     <body>
          <div class="main-container">

               <h3 class="logo"> PHP Laravel 8 | CRUD </h3>


               <ul class="list">
                    <li class="list-items"><a href="{{url('form')}}">Insert Record</a></li>
                    <li class="list-items"><a href="{{url('show')}}">View Record</a></li>
               </ul>

          </div>
     </body>

</html>