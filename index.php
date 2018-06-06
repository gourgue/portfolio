
<?php //session_start();?>

<?php
  ini_set('display_errors','on');
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="author" content="Mike GOURGUE">
  <meta name="description" content="Portfolio">

  <title>Mon portofolio</title>

<!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>

<!-- contenu du site -->
<body>
<nav>
  <div class="topnav" id="myTopnav">
    <a href="#" class="logo active"> Portfolio</a>
    <a href="#accueil">   Accueil </a>
    <a href="#about">     A propos </a> 
    <a href="#portfolio"> Portfolio</a>
    <a href="#contact">   Contact</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  </div>
</nav>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

$(function() {
      $('img').on('click', function() {
      $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
      $('#enlargeImageModal').modal('show');
    });
});
</script>
<?php
// if (isset($_SESSION['success']) && !empty($_SESSION['success'])){
//   echo '<div class="success">'.$_SESSION['success'].'</div>';
//   unset($_SESSION['success']);
// }
?>
<!-- bannière -->

<section class="container-fluid banner">
  <div class="inner-banner">
   <h1> Bienvenue sur mon portfolio </h1>
   <a href="#contact" class="btn btn-custom" > Contactez moi !</a>
  </div>
</section>
<!-- end bannière -->

<!-- about -->
<section class="container-fluid about">
    <div class="container">
      <div class="row">
        <h2 id="about"> À propos de moi</h2>
        <hr class="separator">

        <article class=" col-md-4 col-lg-4 col-xs-12 col-sm-12">
          <h2 class="etude"> Étude </h2>
          <!-- <hr class="separator"> -->
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sit fugiat quas, 
              explicabo rerum, beatae reiciendis dolor aliquam in quia aut! Aut dolorum magni commodi
                nesciunt quisquam optio deserunt, ratione!
            </p>
        </article>

        <article class=" col-md-4 col-lg-4 col-xs-12 col-sm-12">
          <h2> Expérience </h2>
          <!-- <hr class="separator"> -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sit fugiat quas,
             explicabo rerum, beatae reiciendis dolor aliquam in quia aut! Aut dolorum magni 
             commodi nesciunt quisquam optio deserunt, ratione!
          </p>
        </article>

        <article class=" col-md-4 col-lg-4 col-xs-12 col-sm-12">
          <h2> Hobbies </h2>
          <!-- <hr class="separator"> -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sit fugiat quas, explicabo rerum, beatae reiciendis dolor aliquam in quia aut! Aut dolorum magni commodi nesciunt quisquam optio deserunt, ratione!
          </p>
        </article>

      </div>
    </div>
</section>
<!-- end about -->

<!-- portofolio -->
<section class="container-fluid portfolio">
  <div class="container">
    <h2 id="portfolio"> Mon portfolio </h2>
    <hr class="separator">
    <div class="row">
      <div class="container-thumbnail ">
        
        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/jerry.jpeg"> -->
              <img class="thumbnail" src="img/jerry.jpeg" alt="Lights" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/mikey.jpeg"> -->
              <img class="thumbnail" src="img/mikey.jpeg" alt="Nature" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/mike.jpeg"> -->
              <img id="myImg" class="thumbnail" src="img/mike.jpeg" alt="" >
    data-toggle="modal" data-target="#myModal"           <div class="caption">
                <p>Lorem ipsum...</p>
              </div>             
           <!-- </a> -->
         </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/toto.jpeg"> -->
              <img class="thumbnail" src="img/toto.jpeg" alt="Lights" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/thibault.jpeg"> -->
              <img class="thumbnail" src="img/thibault.jpeg" alt="Nature" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/mouse.jpg"> -->
              <img class="thumbnail" src="img/mouse.jpg" alt="Fjords" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

          <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/jerry.jpeg"> -->
              <img class="thumbnail" src="img/jerry.jpeg" alt="Nature" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">
          <div class="thumbnail">
            <!-- <a href="img/titi.jpeg"> -->
              <img class="thumbnail" src="img/titi.jpeg" alt="Fjords" data-toggle="modal" data-target="#myModal" >
              <div class="caption">
                <p>Lorem ipsum...</p>
              </div>
            <!-- </a> -->
          </div>
        </div>

      </div> 
    </div>
  </div> 
</section>



<div class="container">

    <!-- <img class="thumbnail" src="http://lorempixel.com/100/100/"  data-toggle="modal" data-target="#myModal" />
    
    <img class="thumbnail" src="http://lorempixel.com/100/100/"  data-toggle="modal" data-target="#myModal2" /> -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-image">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Image title</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="http://lorempixel.com/400/200/" class="img-responsive center-block" />
                            <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                            <span class="sr-only">Previous</span> 
                            </a>
                            <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
                            <span class="sr-only">Next</span> 
                            </a>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">
                                    <input type="text" class="form-control" placeholder="Add comment..." />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-image">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Image title</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-img">
                            <img src="http://lorempixel.com/1200/1200/" class="img-responsive center-block" />
                            </div>
                            <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                            <span class="sr-only">Previous</span> 
                            </a>
                            <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
                            <span class="sr-only">Next</span> 
                            </a>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                                <li class="list-group-item">
                                    <input type="text" class="form-control" placeholder="Add comment..." />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end  portofolio -->


<!-- footer -->
<footer class="container-fluid footer">
  <div class="container">
	  <div class="row">
	    	<h2 id="contact"> Contactez moi! </h2>
	    	<hr class="separator">

          <div class="col-xs-12">
	            <form method="POST" action="traitement.php" class="formulaireContact" id="contactForm">
	                <div class="controls controls-row">
	                    <input     id="name"    name="name"    type="text"   class="span3" placeholder=" Nom et prénom ">
	                    <input     id="email"   name="email"   type="email"  class="span3" placeholder=" Addresse email">
	                    <input     id="objet"   name="objet"   type="text"   class="span3" placeholder=" Objet">
                      <textarea  id="message" name="message" type="text"   class="span3" placeholder=" Votre message " rows="5"></textarea>
	                    <input id="form-submit" name="envoyer" type="submit" class="btn btn-custom input-medium btn-block">
	                </div>
	            </form>
	        </div>

	   </div>
  	     <p class="paragraph"> Copyright © <?php echo date('Y'); ?> Holder Rights Reserved. </p>
         <hr class="separator">
  </div>
</footer>

<!-- end footer -->
    <!-- <script type="text/javascript" src="js/scripts.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>