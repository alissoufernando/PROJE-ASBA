<?php
if (!empty($_COOKIE['nom'])){
   $autorisation = "oui";     
}else{
    header ('location:inscription.php');
}
?>
<html>
<head>
    <title><?php echo $_COOKIE['nom'];?>-Forum </title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-theme.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<style>
   
    .message{
        width: 500px;
        background: url('Actualites.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: 0px,-50px;
    }
    textarea{
     height: 80px;
     width: 450;
     border-radius: 10px;
     border: 1px solid #000;
    }
    
    button{
	transition:0.3s;
	width:150px;
	height:40px;
	background:#b76959;
	border:4px solid #b76959;
	border-radius:8px;
	font-size:20px;
	margin-bottom: 10px;
}

::-webkit-input-placeholder{
    font-size: 16px;
}
</style>



</head>
<body>
 <br><br><br>
<center>
<div class="message">
 <br><br>
 <form method="post" action="send.php" id="formcom">
            <textarea name="message"> Saisissez info à publier </textarea><br><br><br><br>
            <button type="submit"> Soumettre </button>
            </form>
</div>
</center>
</body>
</html>>