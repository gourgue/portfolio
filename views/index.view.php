
<?php session_start();?>
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
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- <link rel="stylesheet" href="css/animate.css"> -->
</head>

<!-- contenu du site -->
<body>
<!-- header -->
<header class="container-fluid header">

  <div class="container">
    <a href="#" class="logo"> Mon portfolio</a>
  <nav class="menu">
    <a href="#"> Accueil </a>
    <a href="#about"> A propos </a>
    <a href="#portfolio"> Portfolio </a>
    <a href="#contact"> Contact </a>
  </nav>
</div>

</header>
<!-- end header -->

<?php
if (isset($_SESSION['success']) && !empty($_SESSION['success'])){
  echo '<div class="success">'.$_SESSION['success'].'</div>';
  unset($_SESSION['success']);
}
?>
<!-- bannière -->
<section class="container-fluid banner">

 <!--  <div class="ban">
    <img src="img/ban.jpg" alt="bannière du site" />
  </div> -->

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
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

    </article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>
    <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio"></article>

  </div>

</section>
<!-- end  portofolio -->


<!-- footer -->
<footer class="container-fluid footer">
  <div class="container">
  <div class="row">
    <h2 id="contact"> Contactez moi! </h2>
    <hr class="separator">

    <div class="span6">
            <form method="POST" action="../php/process.php" class="formulaireContact" id="contactForm">
              <?php if ($error): ?>
              <div>
                <ul>
                <?php foreach ($error as $e): ?>
                  <li><?php echo $e; ?></li>
                <?php endforeach; ?>
              </ul>
              </div>
            <?php endif; ?>
                <div class="controls controls-row">
                    <input id="name" name="name" type="text" class="span3" placeholder=" Nom et prénom " required>
                    <!-- <div class="help-block with-errors"></div> -->
                    <input id="email" name="email" type="email" class="span3" placeholder=" Addresse email" required>
                    <!-- <div class="help-block with-errors"></div> -->
                </div>
                <div class="controls">
                    <textarea id="message" name="message" class="span6" placeholder=" Votre message " rows="5" required></textarea>
                    <!-- <div class="help-block with-errors"></div> -->
                </div>

                <div class="controls">
                    <input id="form-submit" name="envoyer" type="submit" class="btn btn-custom input-medium btn-block">
                </div>
            </form>
        </div>
  </div>
  <p class="paragraph"> Copyright © 2018 Holder Rights Reserved. </p>
</div>

</footer>
<!-- end footer -->

<script   type="text/javascript" src="js/scripts.js"></script>
<script   type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script   type="text/javascript" src="js/form-scripts.js"></script>
</body>
</html>