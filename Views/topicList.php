<html>
<header>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</header>



<body>
  <!-- MENU NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item menu">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active menu">
          <a class="nav-link" href="topicList.php">Liste des Sujets</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <!--<input class="form-control mr-sm-2" type="text" placeholder="Rechercher un sujet..." aria-label="Search">-->
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Déconnexion</button>
      </form>
    </div>
  </nav>

  <!-- FILTRES TOPICS -->
  <div class="container container-fluid" id="filtres">
    <button class="btn btn-primary" id="filtre-date">Date</button>
    <button class="btn btn-primary" id="filtre-popularite">Popularité</button>


      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Catégories
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">PHP</a>
        <a class="dropdown-item" href="#">HTML</a>
        <a class="dropdown-item" href="#">CSS</a>
        <a class="dropdown-item" href="#">JAVA</a>
        <a class="dropdown-item" href="#">PYTHON</a>
        <a class="dropdown-item" href="#">SQL</a>
        <a class="dropdown-item" href="#">C++</a>
        <a class="dropdown-item" href="#">C#</a>
      </div>
  </div>

  <div class="container container-fluid" id="topic-list">

    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
    <div class="topic" id="app"><a href="#">{{ message }}</a></div>
  </div>

</body>












</html>
