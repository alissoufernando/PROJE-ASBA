<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="indexcss.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet" />
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script src="js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />


<title> LT/ASBA </title>

</head>
<body>
<?php include 'lesprogrammes.html' ?>
<nav class="navbar navbar-primary" style="background:#437ad8;">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-primary">
									<span class="sr-only">Menu</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="imagedulycee/logo.png"><img src="imagedulycee/logo.png" alt="logo" width="60px" height="60px" style="float:left;margin-top:-15px;">LT/ASBA</a>
							</div>

							<div class="collapse navbar-collapse" id="example-navbar-primary">
								<ul class="nav navbar-nav navbar-right">
									<li class="">
		                                <a href="index.php">
											Acceuil
		                                </a>
		                            </li>
		                            <li>
		                                <a href="ateliers.php">
											Ateliers
		                                </a>
		                            </li>
									<li>
		                                <a href="activite.php">
											Activités
		                                </a>
		                            </li>
									
									<li class="dropdown active">
	                                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filières
												<b class="caret"></b>
											</a>
	                                    	<ul class="dropdown-menu dropdown-menu-right">
	                                        	<li class="dropdown-header">Liste de nos filières</li>
	                                        	<li><a href="Electrotechnique.php">Electrotechnique</a></li>
		                                        <li><a href="Electronique.php">Electronique</a></li>
		                                        <li><a href="GenieCivil.php">Génie Civil</a></li>
		                                        <li>
												<a href="MecaniqueAutomobile.php">Mécanique Automobile</a></li>
		                                        <li><a href="ElectrotechniqueF3.php">Electrotechnique F3</a></li>
		                                        <li><a href="IMI.php">IMI</a></li>
		                                    </ul>
	                                	</li>
									<li>
		                                <a href="inscription.php">
											Réseau social ASBA
		                                </a>
		                            </li>
									<li>
		                                <a href="Lesmeilleurs.php">
											Prospectus
		                                </a>
		                            </li>
								</ul>
							</div>
						</div>
					</nav>
					
    <div class="imagedefond" style="height:270px">
        <div class="couleurdepage" style="height:270px">
           <br><br><br><p class="p0">Lycée Technique d'Amitie Sino-Béninoise d'Akassato</p><br><br>
           <p class="p1">Installation et Maintenance en Informatique</p><br><br>
        </div>
    </div><br><br>
    <center>
	<article id="monarticlee">
	
	

<div class="card card-nav-tabs">
							<div class="header header-success" style="background:#1e73be;">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active">
												<a href="#profile" data-toggle="tab">
													
													Seconde
												</a>
											</li>
											<li>
												<a href="#messages" data-toggle="tab">
													
													Première
												</a>
											</li>
											<li>
												<a href="#settings" data-toggle="tab">
													
													Terminale
												</a>

											</li>
											<img src="suv.jpg" alt="" width="50px" height="50px" style="float:right;" title="Professeur Principal">
										</ul>
										
									</div>
									
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
										<p> 
										<table class="table table-hover table-striped">
<thead>
<tr><th>Matière</th><th>Nom du professeur</th><th>Prenom du professeur</th><th>Photo du Professeur</th><th>Programme</th></tr>
</thead>
<tbody>
		<tr>
			<td>Mathématique</td>
			<th>M. HOUNKODE </th>
			<td>Hyacinthe</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondemath">Voir </button> </td>
		</tr>
		
		<tr>
			<td>Législation</td>
			<th>M. SALOU </th>
			<td>Fawaz</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondelegi">Voir </button> 
		</tr>
		
		<tr>
			<td>Algorithme</td>
			<th>M. BOKOSSA </th>
			<td>Judicaël</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeAlgo">Voir </button> 
		</tr>
		
		<tr>
			<td>Anglais</td>
			<th>Mme VIHAYINOU </th>
			<td>Eméline</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeAnglais">Voir </button> 
		</tr>
		
		<tr>
			<td>Logiciel d’Application</td>
			<th>M. AIKPE</th>
			<td>Yves</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondelogiciel">Voir </button> 
		</tr>
		
		
		<tr>
			<td>Electricité et Electronique </td>
			
			<th>SESSINOU </th>
			<td>Ephrem</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeElectronique">Voir </button> 
		</tr>
		<tr>
			<td>Système d’exploitation Récents (SER)  </td>
			
			<th>SESSINOU </th>
			<td>Ephrem</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeSER">Voir </button> 
		</tr>
		<tr>
			<td>Système d'Exploitation Vieillissant (SEV)  </td>
			
			<th>M.BOKOSSA  </th>
			<td> Judicaël </td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeSEV">Voir </button> 
		</tr>
		<tr>
			<td>Analyse de Système  </td>
			
			<th>M. KOUASSIVI  </th>
			<td>Achille</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeAS">Voir </button> 
		</tr>
		<tr>
			<td>Technique d'Expression Ecrite et Orale</td>
			
			<th>M.LICHEHOU</th>
			<td>Florent </td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeTEEO">Voir</button> 
		</tr>
</tbody>
</table> 
										
										
										
										</p>
									</div>
									<div class="tab-pane" id="messages">
										<p>
										<table class="table table-hover table-striped">
<thead>
<tr><th>Matière</th><th>Nom du professeur</th><th>Prenom du professeur</th><th>Photo du Professeur</th><th>Programme</th></tr>
</thead>
<tbody>
		<tr>
			<td>Moyen de télécommunication</td>
			<th>KOUASSIVI</th>
			<td>Achille</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeMT">Voir </button> 
		</tr>
		
		<tr>
			<td>Législation</td>
			<th>M. SALOU </th>
			<td>Fawaz</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeDroit">Voir </button> 
		</tr>
		
		<tr>
			<td>Cheminement personnel </td>
			<th>M.DAHOUNDO</th>
			<td>Franck</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondecp">Voir </button> 
		</tr>
		
		<tr>
			<td>Anglais</td>
			<th>Mr NOUTAI</th>
			<td>Victor</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" >Voir </button> 
		</tr>
		
		<tr>
			<td>Logiciel d’Application</td>
			<th>M. AIKPE</th>
			<td>Yves</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondela">Voir </button> 
		</tr>
		
		
		<tr>
			<td>Electricité et Electronique </td>
			
			<th>SESSINOU </th>
			<td>Ephrem</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeeb">Voir </button> 
		</tr>
		<tr>
			<td>Base de données</td>
			
			<th>AHOUADA</th>
			<td>Orèste</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondebd">Voir </button> 
		</tr>
		<tr>
			<td>Installation de Poste </td>
			
			<th>M.KOUASSIVI</th>
			<td> Achille</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeip">Voir </button> 
		</tr>
		<tr>
			<td>Interaction Professionel </td>
			
			<th></th>
			<td></td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeint">Voir </button> 
		</tr>
		<tr>
			<td>Technique d'Expression Ecrite et Orale</td>
			
			<th></th>
			<td></td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary">Voir </button> 
		</tr>
		
</tbody>
</table> 
					
										
										</p>
									</div>
									<div class="tab-pane" id="settings">
										<p>
																	<table class="table table-hover table-striped">
<thead>
<tr><th>Matière</th><th>Nom du professeur</th><th>Prenom du professeur</th><th>Photo du Professeur</th><th>Programme</th></tr>
</thead>
<tbody>
		<tr>
			<td>Réseau</td>
			<th>KOUASSIVI</th>
			<td>Achille</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondere">Voir </button> 
		</tr>
		
		<tr>
			<td>Législation</td>
			<th>M. COHUFFO</th>
			<td>Hector</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondedl">Voir </button> 
		</tr>
		
		<tr>
			<td>Mathématique</td>
			<th>M.LOKPOE</th>
			<td>Mawulé</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondemat">Voir </button> 
		</tr>
		
		<tr>
			<td>Anglais</td>
			<th>Mme VIHAYINOU</th>
			<td>Eméline</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeen">Voir </button> 
		</tr>
		
		<tr>
			<td>Optimisation d'un poste</td>
			<th>M. AIKPE</th>
			<td>Yves</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeop">Voir </button> 
		</tr>
		
		
		<tr>
			<td>Rétablissement d'un poste</td>
			
			<th>M.SESSINOU </th>
			<td>Ephrem</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalseconderp">Voir </button> 
		</tr>
		<tr>
			<td>Assistance en ligne </td>
			
			<th>M.AHOUADA</th>
			<td>Orèste</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondeal">Voir </button> 
		</tr>
		<tr>
			<td>Base de Données</td>
			
			<th>M.NATHANIELS</th>
			<td> Dirk</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondebasd">Voir </button> 
		</tr>
		<tr>
			<td>Programmation</td>
			
			<th>M.AKPAGBE</th>
			<td>Samuel</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalsecondepro">Voir </button> 
		</tr>
		<tr>
			<td>Technologie</td>
			
			<th>M.BOKOSSA</th>
			<td>Judicaël</td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary"  data-toggle="modal" data-target="#myModalsecondetechn">Voir </button> 
		</tr>
		<tr>
			<td>Technique d'Expression Ecrite et Orale</td>
			
			<th>M.LICHEHOU</th>
			<td>Florent </td> 
			<th><img src="default-avatar.png" alt="" width="50px" height="50px" style="border-radius:100px;"></th> 
			<td> <button class="btn btn-primary">Voir </button> 
		</tr>
</tbody>
</table> 
										</p>
									</div>
								</div>
							</div>
						</div>


	</article></center>
   
   
   
	
</body>
</html>