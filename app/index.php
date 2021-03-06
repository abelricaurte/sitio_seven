<!doctype html>

<?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>S4N</title>
<link href="css/bootstrap.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/cases.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet">
</head>
<body id="fondo" class="home">

<!--HEADER Y MENU-->
<div class="menu-head">
  <div class="container-fluid">
        <div class="logo-menu-head"><a href="http://s4n.co"><img class="lg-responsive" src="images/logo-head-cases-responsive.png" alt="S4N" /><img class="lg-desktop" src="images/logo-head-cases.png" alt="S4N" /></a></div>
        <div class="top">
          <ul class="nav nav-pills right">
            <li><a href="jobs/index.html">WORK WITH US</a></li>
            <li><img src="images/punto.png" alt="" /></li>
            <li><a href="#arriba">CONTACT</a></li>
          </ul>
        </div>
        <button class="btn-menu-desplegar" id="mostrar-menu">
        </button>
    </div>
</div>
<!--MENU DESPLEGADO-->
<div class="menu-abierto">
    <div class="container-fluid">
        <a class="btn-cerrar" id="ocultar-menu"></a>
    </div>
    <div class="container-cuerpo">
        <ul>
            <li class="line-top-grey"><h2><a href="http://s4n.co">Home</a></h2></li>
            <li><h2><a href="aboutus.html">About Us</a></h2></li>
            <li><h2><a href="capabilities.html">Capabilities</a></h2></li>
            <li><h2><a href="cases.html">Cases</a></h2></li>
            <li><h2><a href="jobs/index.html">Work with us</a></h2></li>
        </ul>
    </div>
</div>

<!--Contenidos-->
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <nav>
        <ul>
          <li><a href="aboutus.html">About us</a></li>
          <li><a href="capabilities.html">Capabilities</a></li>
          <li><a href="cases.html">Cases</a></li>
        </ul>  
    </nav> 
    <div class="nav-bottom">
      <ul class="nav nav-pills">
            <li><a   href="jobs/index.html">WORK WITH US</a></li>
            <li><img src="images/punto.png" alt="" /></li>
            <li><a href="#arriba">CONTACT</a></li>
          </ul>
    </div>      
  </div>
</div>
<div class="footer" id="arriba">
  <div class="col-md-10 col-md-offset-1">
    <div class="row contact">
      <h3>Give your idea a tech bump today</h3>
    </div>
    <div class="row-fluid">
      <div class="col-md-6 inf1">
          <div class="row-fluid">
          <div class="col-md-6">
        </div>
         <div class="col-md-6">
          <h4>U.S.A.</h4>
          <ul>
          	<li>Miami - Florida</li>
            <li>2280 SW 32ND AVE # 614</li>
            <li>33145 Coral Gables</li>
            <li>(+1) 3052989481</li>            
          </ul>
        </div>
        </div>
       <div class="row-fluid">
          <div class="col-md-6">
          <br/><br/><br/>
          <ul>
          	<li>Medellín</li>
            <li>Carrera 30 # 10C - 04</li>
            <li>Piso 10 Edif. Select</li>
            <li>(+574) 3668113</li>            
          </ul>
        </div>
         <div class="col-md-6">
          <h4>Colombia</h4>
          <ul>
          	<li>Bogotá</li>
            <li>Cra 19A # 84 - 14</li>
            <li>Piso 6 Edif. Torrenova</li>
            <li>(+571) 749 8821</li>
            <li>(+571) 703 5882</li>
            
          </ul>
        </div>
        </div>
    </div> 
    <div class="col-md-1">        
    </div> 
    <div class="col-md-5">
      <br/>
    <form class="appnitro" >     
      <div id="confirm" data-alert="" class="alert alert-success off"> <strong>Good!</strong> Your message has been sent, we´ll get back to you promptly. </div>
      <input type="text" name="company" class="form-control" id="company" placeholder="Company" required>
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
      <input type="text" name="country" class="form-control" id="country" placeholder="Country" required>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
      <textarea class="form-control" id="message" name="message" rows="3" placeholder="Messages" required></textarea>
      <button class="button">Contact me &raquo;</button>
    </form>     
    </div> 
    <div class="col-md-6 inf2">
          <div class="row-fluid">        
         <div class="col-xs-4">
          <h4>U.S.A.</h4>
          <ul>
            <li>Miami - Florida</li>
            <li>2280 SW 32ND AVE # 614</li>
            <li>33145 Coral Gables</li>
            <li>(+1) 3052989481</li>            
          </ul>
        </div>
        <br/>
        </div>
         <div class="col-xs-4">
          <h4>Colombia</h4>
          <ul>
            <li>Bogotá</li>
            <li>Cra 19A # 84 - 14</li>
            <li>Piso 6 Edif. Torrenova</li>
            <li>(+571) 749 8821</li>
            <li>(+571) 703 5882</li>            
          </ul>
        </div>        
          <div class="col-xs-4">
          <br/>
          <ul>
            <li>Medellín</li>
            <li>Carrera 30 # 10C - 04</li>
            <li>Piso 10 Edif. Select</li>
            <li>(+574) 3668113</li>            
          </ul>
        </div>
    </div> 
    <div class="col-md-6 inf3">
          <div class="row-fluid">
          <div class="col-md-6">
        </div>
         <div class="col-md-6">
          <h4>U.S.A.</h4>
          <ul>
            <li>Miami - Florida</li>
            <li>2280 SW 32ND AVE # 614</li>
            <li>33145 Coral Gables</li>
            <li>(+1) 3052989481</li>            
          </ul>
        </div>
        </div>
       <div class="row-fluid">          
         <div class="col-md-6">
          <h4>Colombia</h4>
          <ul>
            <li>Bogotá</li>
            <li>Cra 19A # 84 - 14</li>
            <li>Piso 6 Edif. Torrenova</li>
            <li>(+571) 749 8821</li>
            <li>(+571) 703 5882</li>
            
          </ul>
        </div>
        <div class="col-md-6">
          <br/><br/>  
          <ul>
            <li>Medellín</li>
            <li>Carrera 30 # 10C - 04</li>
            <li>Piso 10 Edif. Select</li>
            <li>(+574) 3668113</li>            
          </ul>
        </div>
        </div>
    </div> 

  </div>
  <!-- -->

<!-- -->

          
  </div>

  <div class="row">
    <div class="col-md-1 col-md-offset-6">
      <img src="images/lg-footer.png" alt="S4N" />
      <a>info@s4n.co</a>
    </div>
  </div>
</div>

<!--FOOTER-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
<script>
$(function() {
  var images = ['bg1.jpg', 'bg2.jpg', 'bg3.jpg',];
  $('#fondo').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
  });
</script>
<script>
  $(function(){
    
    $(".button").click(function() {
     // validate and process form here
      
        var company = $("#company").val();
        if (company == "") {
        $("#company").focus();
        return false;
      }
       
        var name = $("#name").val();
        if (name == "") {
        $("#name").focus();
        return false;
      }
       
        var country = $("#country").val();
        if (country == "") {
        $("#country").focus();
        return false;
      }

        var email = $("#email").val();
        if (email == "") {
        $("#email").focus();
        return false;
      }

        var message = $("#message").val();
        if (message == "") {
        $("#message").focus();
        return false;
      }

      var dataString = 'company='+ company + '&name=' + name + '&country=' + country + '&email=' + email + '&message=' + message;
      //alert (dataString);return false;
      $.ajax({
        type: "POST",
        url: "email.php",
        data: dataString,
        success: function() {
          $('#confirm').attr('class', 'alert alert-success on');
        }
      });

      return false;

    });
  });
</script>
</body>
</html>
