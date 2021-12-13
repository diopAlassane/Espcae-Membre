<?php
include('../include/conexion.php');
if ($_GET['idmod']) {
    $id = $_GET['idmod'];
    $req = "SELECT * FROM cotisations WHERE NumCotis=?";
    $resultat = $connexion->prepare($req);
    $resultat->execute([$id]);
    $cotisations = $resultat->fetch();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Arame gueye</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
            <h2>MODIFIER COTISATIONS</h2>
        </a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">
                                <span data-feather="home"></span>
                                Accueil <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listeMembre.php">
                                <span data-feather="file"></span>
                                Membres
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listeCotisation.php">
                                <span data-feather="shopping-cart"></span>
                                Cotisations
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between mb-3">
                </div>
                <div>
                    <form action="../traitement/ModifierPaiement.php" method="POST">
                        <div class="form-group">
                            <label for="DateCotis">DateCotis</label>
                            <input type="date" class="form-control" id="DateCotis" value="<?php echo $cotisations['DateCotis'] ?>" name="DateCotis" placeholder="">
                            <input type="hidden" class="form-control" id="DateCotis" value="<?php echo $cotisations['NumCotis'] ?>" name="id" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="Mois">Mois</label>
                            <select name="Mois" value="<?php echo $cotisations['Mois'] ?>" class="form-control">
                                <option>Veuillez choisir le mois</option>
                                <option value="Janvier">Janvier</option>
                                <option value="Fevrier">Février</option>
                                <option value="Mars">Mars</option>
                                <option value="Avril">Avril</option>
                                <option value="Mai">Mai</option>
                                <option value="Juin">Juin</option>
                                <option value="Juillet">Juillet</option>
                                <option value="Aout">Aout</option>
                                <option value="Septembre">Septembre</option>
                                <option value="Octomre">Octomre</option>
                                <option value="Novembre">Novembre</option>
                                <option value="Decembre">Decembre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Motif">Motif</label>
                            <select name="motif" class="form-control">
                                <option value="<?php echo $cotisations['Motif'] ?>"><?php echo $cotisations['Motif'] ?></option>
                                <option value="Inscription">Inscription</option>
                                <option value="Mensualite">Mensualite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="text" value="<?php echo $cotisations['Montant'] ?>" class="form-control" id="Montant" name="Montant" placeholder="montant en franc CFA">
                        </div>
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="text" value="<?php echo $cotisations['Matricule'] ?>" class="form-control" id="Matricule" name="Matricule" disabled placeholder="">

                        </div>
                        <button type="submit" class="btn btn-primary" name="ModifierPaiement">MODIFIER</button>
                    </form>
                </div>
                <hr class="line">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>Contacts</h2>
                    </div>
                    <div class="card-body" style="height: 10rem ;">
                        <h5 class="card-title">Pour toutes vos informations</h5>
                        <p class="card-text">N'hesitez pas de nous contacter ,nous sommes là pour votre disposition.</p>
                        <a href="#" class="btn btn-primary">Savoir Plus</a>
                    </div>
                    <div class="card-footer text-muted">
                        Copyright//bakh-yaye création2021@gmail.com/ Dakar-Sénégal
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
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