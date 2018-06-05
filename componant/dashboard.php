<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./Assets/css/conf.min.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Compatable</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#operation">
                  <span data-feather="file"></span>
                  Operations
                </a>
              </li>
              
            </ul>
            <br/>
            <h2>300 €</h2>
            

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Ajouter operation</button>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <h2>Operations</h2>
          <div class="table-responsive" id="operation">

            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Montant</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
<?php
$tab = array (
    'ID' => '1',
    'Date' => '01/03/1988',
    'Type' => 'Vetements',
    'Montant' => 66);
?>
                <tr>
                  <td><?= $tab['ID'];?></td>
                  <td><?= $tab['Date'];?></td>
                  <td><?= $tab['Type'];?></td>
                  <td><?= $tab['Montant'];?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>


<?php

/* 
include('includes/db.php');
if ( empty($_SESSION['users']) ) {
	header('Location: connection.html');
	die();
}
if ( !empty($_POST['description']) AND (!empty($_POST['title'])) ){
	$forum->creerTopic(
	$_POST['title'],
	$_POST['description'],
	$_SESSION['users']['id'],
	$_POST['categorie']
	);
	header('Location: accueil.php');
	die();
}
else {
	header('Location: formulaire_topic.php');
}
 */
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nouvelle Operation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Date</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Montant</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Categorie</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option disabled>Credit</option>
                    <option >Salaire</option>
                    <option>Autre Entrée D'argent</option>
                    <option disabled>Debit</option>
                    <option>Vetements</option>
                    <option>Alimentaire</option>
                    <option>Autre Depense</option>
                  </select>
                </div>
                  <div class="form-group col-md-6">
                      <label for="exampleFormControlSelect1">Devise</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>Euro (€)</option>
                        <option>Dollard ($)</option>
                        <option>Livre ()</option>
                        <option>Bitcoin</option>
                        <option>Autre Depense</option>
                      </select>
                  </div>
              </div>
              <div class="form-row">
                  <label for="exampleFormControlSelect1">Commentaire</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Liste des comptes</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option disabled>PEL</option>
                          <option disabled>La Poste</option>
                        </select>
</div>
<div class="form-group col-md-6">
                         <label for="exampleFormControlSelect1">Moyen de paiement</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option disabled>PEL</option>
                          <option disabled>La Poste</option>
                        </select>
</div>
                      </div> 
                      <br>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <input type="submit" class="btn btn-primary"/>
                      </div>
            </form>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>




    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"],
          datasets: [{
            data: [<?= json_encode((int) $tab['Montant']);?>, 2345, 1883, 240, 2349, 2402, -124, 2349, 292, 104, 2402, 1204],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
