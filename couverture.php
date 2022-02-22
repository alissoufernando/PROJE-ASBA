<!DOCTYPE>
<html>
<head>
<!--[if lt IE 9]>;
<script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script> 
<title> Eglise Evangelique Des Assemblées de Dieu de Yénandjro </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="logo_logo-oc.png"/>
<style>
    #idmere{
        background:#fff ;
        border-radius:8px;
        margin-top: 100px;
        
    }
    .input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background: #439cd8;
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
  color: #439cd8;
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
  margin: 5px 0 2em;
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
  color: #439cd8;
}
</style>
</head>
<body>
    <center>
<div id="idmere">
    <div>
        <h1>LT messenger</h1>
<h2>Votre photo de profil</h2>
           <form method="post" action="uploading.php" enctype="multipart/form-data">
        <div class="input-file-container">  
        <input class="input-file" id="my-file" type="file" name="monfichier" required>
        <label tabindex="0" for="my-file" class="input-file-trigger"><i class="fa fa-picture-o"></i>Selectionez le profil</label>
        </div>
        <p class="file-return"></p><br>
        <button type="submit">Envoyer</button>
           </form> 
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

