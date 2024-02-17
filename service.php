<?php
	session_start();

	require_once 'model/EmploiDB.php';
	require_once 'model/EntrepriseDB.php';
	require_once 'model/CategoriDB.php';
	require_once 'model/UserDB.php';
	require_once 'model/RoleDB.php';
	require_once 'model/PostulerDB.php';
	require_once 'package.php';


	$emploidb= new EmploiDB();
	$categoriedb= new CategorieDB();
	$entreprisedb=new EntrepriseDB();
	$userdb= new UserDB();
	$roledb= new RoleDB();
	$postulerdb= new PostulerDB();
?>