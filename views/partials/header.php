<?php 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="stylesTest.css" rel="stylesheet">
    <link rel="stylesheet" href="loading.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">catégories</a>
          <ul class="dropdown-menu">
        <?php foreach($categories as $category){ ?>
          <li><a class="dropdown-item" href="#"><?php echo $category->getCategoryName(); ?></a></li>
        <?php } ?>
      </ul>
        </li>
        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])){?>
            <li class="nav-item">
                <a class="nav-link" href="addpost.php">Ecrire un post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Se déconnecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addcategory.php">Ajouter une catégorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productController.php?action=listProducts">Boutique</a>
            </li>
          
        <?php }else{?>
              <a class="nav-link" href="signup.php">S'inscrire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Se connecter</a>
            </li>
            <?php }?>
          </ul>
            <a class="navbar-brand" href="#">
              <img src="image\logo-warhammer-40000-warhammer-40k-logo-small-115629369566utaxdeqd1-removebg-preview.png"alt="Logo" width="180" height="auto">
        
            </a>
            <a class="navbar-brand" href="https://www.games-workshop.com/fr-FR/D-accueil" target="_blank">
              <img src="image\768px-Games_Workshop_(logo).svg.png"alt="Logo" width="160" height="80">
        
            </a>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
</nav>