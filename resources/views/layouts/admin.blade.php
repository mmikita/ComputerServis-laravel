<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>System serwisu komputerowego</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/multip/css/mbr-additional.css')}}" type="text/css">


  </head>
  <body>
    <header>

 
      <div>

        <img src="/assets/images/logo.png" width="90px" class="mbr-navbar__brand-link " style="position: absolute; z-index: 500; padding-left: 5px; padding-top: 3px"  />
      </div>
  
    <nav class="navbar navbar-default">
      <div class="container-fluid" style="margin-left: 110px;">
        <ul class="nav navbar-nav">
          <li><a href="/admin">Naprawy oczekujące na zatwierdzenie</a></li>
          <li><a href="/admin/awaitForEmp">Naprawy oczekujące na przydział pracownika</a></li>
          <li><a href="/serwis/add">Dodaj naprawe</a></li>
          <li class="dropdown"><a class="dropdown-toggle"
            data-toggle="dropdown" href="/admin/repairsList">Lista napraw<span
              class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/serwis/allRepairs">Wszystkie naprawy</a></li>
              <li><a href="/serwis/filterByStatus/oczekujaca">Oczekujące
                  naprawy</a></li>
              <li><a href="/serwis/filterByStatus/w trakcie">Bieżące
                  naprawy</a></li>
              <li><a href="/serwis/filterByStatus/zakonczona">Zakonczone
                  naprawy</a></li>
              <li><a href="/serwis/filterByStatus/nieodbyta">Nieodbyte
                  naprawy</a></li>
            </ul></li>
          <li><a href="/serwis/notes">Notatki</a></li>
        </ul>
      </div>
    </nav>



  </header>
@yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/pcStart.js"></script>
  </body>
</html>