<?

?>

<html>
<header>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<body>
  <!-- MENU NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active menu">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item menu">
          <a class="nav-link" href="topicList.php">Liste des Sujets</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <!--<input class="form-control mr-sm-2" type="text" placeholder="Rechercher un sujet..." aria-label="Search">-->
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Déconnexion</button>
      </form>
    </div>
  </nav>


<!--SYSTEME DE NOTIFICATIONS -->
  <div class="container container-fluid">
    <div class="alert alert-info">
      <h5>Vous avez 2 notifications en attente</h5>
      <ul>
        <li>
            <span>PHP - Fusion de deux arrays ?</span>
        </li>
        <li>
            <span>JAVA - Utilisation des Factories</span>
        </li>
      </ul>
    </div>
  </div>


<!-- TOP TOPICS -->
<div class="container container-fluid">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#hotTopics" role="tab">Hot Topics</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#latestTopics" role="tab">Latest Topics</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="hotTopics" role="tabpanel">
        <span>
          PHP - Zend Framework
        </span>
        <hr>
        <span>
          VIEWJS - Bug listes
        </span>
        <hr>
        <span>
          SQL - Select index pour suppression dans tables multiples
        </span>
        <hr>
        <span>
          JAVA - Utilisation des Factories
        </span>
        <hr>
        <span>
          C# - Problème avec Unity
        </span>
    </div>

    <div class="tab-pane" id="latestTopics" role="tabpanel">
      <span>
        PHP - Problème vues avec Symfony
      </span>
      <hr>
      <span>
        JAVASCRIPT - Bug affichage dans animation
      </span>
      <hr>
      <span>
        PYTHON - Insertion de doublons en BDD avec script Python
      </span>
      <hr>
      <span>
        J2EE - Quel framework choisir ?
      </span>
      <hr>
      <span>
        PERL - Utilité d'un script en Perl ?
      </span>
    </div>
  </div>
</div>

</body>


<footer>
</footer>

</html>

<script>
$('#hotTopics a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#latestTopics a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


$(document).ready(function(){
    var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue!'
        }
    });
});


</script>



</script>
