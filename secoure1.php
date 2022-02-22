<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="indexcss.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" href="barredefilement.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script src="modernizr.custom.js"></script>

<title> LT/ASBA </title>

</head>
<body>
     
      <?php setcookie('motdesecoure', $_GET['motdepasse'], time() + 365*24*3600,true); ?>
      <form action="traitementsecour.php" method="post">
  <input type="password" required placeholder="Votre mot de passe" name="motprincipal">
  <button type="submit" class="btn-primary">Soumettre</button>
      </form>
</body>
</html>