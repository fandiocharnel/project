<?php
    require_once 'service.php';
     $vue=null;
    if (isset($_GET['vue'])==true) {
        $vue=$_GET['vue'];
    }

    if(isset($_SESSION['iduser'] )!= true){
        $_SESSION['error']= array(
            'type' => 'danger',
            'message' => 'Tentative de connexion malveillante.'
        );
      header('Location:index.php');
            echo "<script>alert('Tantative de connexion malveillante')</script>";
            header("Location:index.php");
      }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
	<title></title>
</head>
<body>

<!-- <main id="contain"> -->

	<div class="menu" id="menu">


		<h1>
			Job Offer
		</h1>

		<p>
            <a href="admin.php?vue=dashboard">
                <i class="fas fa-home" id="icone"></i>
                <span>Acceuil</span>
            </a> 
        </p>

        <p>
            <a href="admin.php?vue=ajouter_emploi">
                <i class="fas fa-plus-circle" id="icone"></i>
                <span>Publier une offre</span>
            </a> 
        </p>

        <p>
            <a href="admin.php?vue=liste_offre">
                <i class="fas fa-th-list" id="icone"></i>
                <span>Toutes nos offres</span>
            </a> 
        </p>

        <p>
            <a href="admin.php?vue=admin">
                <i class="fas fa-pencil-alt" id="icone"></i>
                <span>Administration du site</span>
            </a> 
        </p>
        <p>
            <a href="">
            	<i class="fas fa-question-circle" id="icone"></i>
                <span>Consernant le site</span>
            </a> 
        </p>

        <p>
             <a href="controlleur/deconnexionControlleur.php">
                <i class="fas fa-sign-out" id="icone"></i>
                <span>Se deconnecter</span>
            </a> 
        </p>
 
	</div>

	<div class="contenu">

        <div class="nav_barr">
            <h2><i class="fas fa-list"></i></h2>
            <div class="searchBar">
                <i class="fas fa-search"></i>
            <input type="search" name="" placeholder="Search">
        </div>
            
        </div>
        <div class="module">
        <?php  
            if ($vue== null || $vue=='dashboard') {
                include('vue/dashboard.php');
            }
            elseif ($vue=='ajouter_emploi') {
                include 'vue/emploi/create.php';
            }elseif ($vue=='liste_offre') {

                include 'vue/emploi/index.php';
            }
            elseif ($vue== 'admin') {
              include 'vue/emploi/index1.php';
              include 'vue/user/index.php';
              include 'vue/postuler/userpostuler.php';
            }else if ($vue == 'postuler') {
                include 'vue/postuler/postuler.php';
            }
            elseif ($vue== 'emploi_postuler') {
              include 'vue/postuler/postuler.php';
            }
            elseif ($vue== 'update') {
              include 'vue/emploi/update.php';
            }

            elseif ($vue== 'emploi_update') {
              include 'vue/emploi/update.php';
            }
            elseif($vue=='user'){
                include 'vue/user/index.php';
            }
            elseif($vue=='dashboard_user'){
                include 'vue/user/index.php';
            }
            elseif ($vue== 'user_create') {
               include 'vue/user/create.php';
            }
            elseif ($vue== 'update_user') {
               include 'vue/user/update.php';
            }
            elseif ($vue== 'index_update_user') {
               include 'vue/user/update.php';
            }
        ?>
        </div>
    </div>
<!-- </main> -->
</body>
</html>