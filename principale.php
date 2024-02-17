<?php
    require_once 'service.php';
    // require_once 'package.php';
     $vue=null;
    if (isset($_GET['vue'])==true) {
        $vue=$_GET['vue'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/fontawesome/js/all.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- ***************menue de gauche************* -->
            <!-- ***************menue de gauche************* -->
            <!-- ***************menue de gauche************* -->
            <div class="col-sm-3" id="content">
                    <div class="contient_offre">
                    <div class="logo">
                       <!--  <img src="image/photo.jpg"> -->
                        <span>Job Offer</span>
                    </div>
                    <div class="menue">
                         
                        <p>
                           <a href="principale.php?vue=Acceuil">
                               <i class="fas fa-home" id="icone"></i>
                               <span>Acceuil</span>
                           </a> 
                        </p>

                         <p>
                           <a href="principale.php?vue=emploi">
                               <i class="fas fa-plus-circle" id="icone"></i>
                               <span>Publier une offre</span>
                           </a> 
                        </p>

                         <p>
                           <a href="principale.php?vue=offre">
                               <i class="fas fa-th-list" id="icone"></i>
                               <span>Toutes nos offres</span>
                           </a> 
                        </p>

                         <p>
                           <a href="principale.php?vue=choix">
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
                           <a href="">
                               <i class="fas fa-area-chart" id="icone"></i>
                               <span>Statistiques</span>
                           </a> 
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-sm-9">
                <div class="row" id="text">
                    <div class="col-3">
                        <i class="fas fa-list" id="icone"></i>
                    </div>
                    <div class="col" id="recherche">
                        <input type="search" name="" placeholder="Search.....">
                        <button type="submit" class="btne">Search</button>
                    </div>
                    <div class="col">
                        <i class="fas fa-shopping-cart" id="pagnier"></i> 
                    </div>
                    <div class="col" id="profil">
                        <a href="#" title="mon compte">
                            <img src="image/photo.jpg">
                        </a>
                    </div>
                </div>
                <div>
    <?php  

if ($vue=='emploi') {
    include 'vue/emploi/create.php';
}elseif ($vue=='offre') {

    include 'vue/emploi/index.php';
}
elseif ($vue== 'choix') {
  include 'vue/emploi/index1.php';
}else if ($vue == 'postuler') {
    include 'vue/postuler/postuler.php';
}
elseif ($vue== 'emploi_postuler') {
  include 'vue/emploi/postuler.php';
}
elseif ($vue== 'update') {
  include 'vue/emploi/update.php';
}

elseif ($vue== 'emploi_update') {
  include 'vue/emploi/update.php';
}
?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>