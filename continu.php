<!DOCTYPE>
<html>
<head>
<!--[if lt IE 9]>;
<script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title> Profil </title>
    <link rel="shortcut icon" type="image/x-icon" href="logoasba.jpg" />
<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="css/animatee.css">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" href="barredefilement.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<script src="js/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<title><?php echo $_COOKIE['nom'];?></title>
<style>
    #idmere{
        background:#fff ;
        border-radius:8px;
        margin-top: 100px;
		width:300px;
		border:1px solid silver;
    }
	body{
		background:
	}
    .input-file-container {
  position: relative;
  width: 225px;
}
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background: #39D2B4;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #34495E;
  color: #39D2B4;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}

/* Useless styles, just for demo styles */

body {
  font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
  color: #7F8C9A;
  background: #FCFDFD;
}
h1, h2 {
  margin-bottom: 5px;
  font-weight: normal;
  text-align: center;
  color:#aaa;
}
h2 {
  margin: 5px 0 1.5em;
  color: #1ABC9C;
}
form {
  width: 225px;
  margin: 0 auto;
  text-align:center;
}
h2 + P {
  text-align: center;
}
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #1ABC9C;
}
.button1:hover{
	transition:0.3s;
	width:150px;
	height:30px;
	background:#4375d8;
	border:4px solid #4375d8
	border-radius:8px;
	font-size:15px;
	margin-left:5px;
	margin-top:30px;
	color:#fff;
	font-family:Georgia;
	font-weight:bold;
}
.button1{
	transition:0.3s;
	width:150px;
	height:30px;
	background:#4375d8;
	border:4px solid #4375d8;
	border-radius:8px;
	font-size:15px;
	margin-left:5px;
	margin-top:30px;
	color:#fff;
	font-family:Georgia;
	font-weight:bold;
}

</style>
</head>
<body>
    <center>
<div id="idmere">
    <div>
        <h1 style="font-family:forte;">ltmessenGer</h1></br></br>
           <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="input-file-container" >
        <input class="input-file" id="my-file" type="file" name="monfichier">
        <label tabindex="0" for="my-file" class="input-file-trigger" style="border-radius:7px;">Selectionez le profil</label>
        </div>
        <p class="file-return" style="background:rgba(12,10,15,0.3);border-radius:7px;padding:3px;"></p><br>
        <button type="submit" class="button1" data-toggle="modal" href="#infos"><i class="fa fa-send"></i>Envoyer</button><br><br>
           </form>
    </div>
</div>

<div class="modal" id="infos">
<div class="modal-dialog">
<center><img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif" style="margin-top:200px;"></center>
</div>
</div>
</center>
        
    <script>
document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");

button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});
fileInput.addEventListener( "change", function( event ) {
    the_return.innerHTML = this.value;
});
</script>
</body>
</html>
