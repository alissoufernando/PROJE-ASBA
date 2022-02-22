<html>
    <head>
		<link rel="stylesheet" type="text/css" href="css/animatee.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="indexcss.css">
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    </head>
	<style>
        #background{
            background:rgba(10,12,18,0.5);height:100%;
        }
		#pgene{
			font-family:Amperzand;
			font-size:45px;
			color:#fff;

		}
    body{
      background-image:url('glasses-415257_960_720.jpg');
      background-size: 90%;

    }
	*{
	margin:0px;}
	input{
	width:400px;
	height:40px;
	border-left:none;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #fff;
	background:none;
	color:white;
  font-size:16px;
	margin-bottom:30px;
	margin-top:13px;
	}
	::-webkit-input-placeholder{
	color:white;
  font-size:16px;
  margin-left:20px;
  opacity:0.6;
}
.button1:hover{
	margin-top:50px;
	box-shadow:0px 0px 20px #fff;
	transition:0.3s;
	background:none;
	border:4px solid #fff;
	color:#fff;
}
.button1{
	transition:0.3s;
	width:200px;
	height:50px;
	background:#b76959;
	border:4px solid #b76959;
	border-radius:8px;
	font-size:20px;
	margin-left:5px;
	margin-top:30px;
}
#button{
    float:right;margin-right:20px;
}
 #inscrit{
        display: none;
    }
.loader{
    height: 100px;
    width: 30px;
    z-index: 9999;
    display: none;
}
video{
    width:100%;display:block;margin:0px;position:fixed;z-index:-100;
}
@media screen and (max-width: 1200px)
{
  video{
    display: none;
  }
  body{
    background: url('19.jpg');
    background-size: 100%;
  }

}
@media screen and (max-width: 1100px)
{
  body{
    background: url('19.jpg');
    background-size: 150%;
  }
}

    @media screen and (max-width: 750px)
{
  body{
    background: url('19.jpg');
    background-size: 200%;
  }
}
@media screen and (max-width: 600px)
{
  body{
    background: url('19.jpg');
    background-size: 300%;
  }
}
@media screen and (max-width: 500px)
{
  body{
    background: silver;
    background-size: 400%;
  }

  #button{
    display: none;
}
#background{
            background:none;height:100%;
        }
        input{
	width:290px;
	height:40px;
	border:5px solid #fff;
	background:#fff;
	color:#000;
    border-radius:7px;
    font-size:16px;
	margin-bottom:30px;
	margin-top:13px;
	}
    img{
        width: 100px;
        margin-top:-100px;
    }
    #inscrit{
        display: block;
    }
}

	</style>
    <body>
   <div id="background">

  <center>
<a href="connexionnnn.php"><button type="submit" class="button1" id="button"> Inscription <i class="fa fa-arrow-left i"></i></button></a><br><br><br><br><br>
<p id="pgene" class="animated wow bounceInDown">ltmessenGer</p>
  <div id="loader" class="loader"><img src="slider-loader.gif"></div>
  <form action="inscrire.php" method="post">
 <input  type="text" name="numero" alt="numero" required placeholder="Tapez votre email svp" maxlengh="20" size="30" id="username"> <br>
   <input type="password"  name="motpass" alt="mot de passe" required placeholder="Saisissez votre mot de passe " size="20" maxlength="30" id="password"/><br>
   <button type="submit" class="button1" id="submit"> Se connecter <i class="fa fa-arrow-right i"></i></button>
   </form>
 <br><br> <a href="motdepasseoublier.php" style="color:#000;">Passer au mot de passe secoure</a><br>
 <a href="connexionnnn.php" id="inscrit"> Je m'inscris </a>
  </center>
   </div>
   <script src="jquery.js"></script>

    </body>
</html>
