<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : "Billet simple pour l'Alaska" ?>
    </title>

    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

    <script>
  tinymce.init({
    selector: '.news'
  });
  </script>
    
    <meta charset="utf-8" />

    <meta name="description" content="Billet simple pour l'Alaska de Jean Forteroche, acteur et écrivain ">

    <meta name="author" content="Jean Forteroche, acteur et écrivain">

    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <link rel="stylesheet" href="/css/Envision.css" type="text/css" />

    <link rel="stylesheet" href="/css/style.css" type="text/css" />

    

    
  </head>
  
  <body id="blog">
    <div id="wrap">
      <header>
        <h1><a href="/">Billet simple pour l'Alaska</a></h1>
        <p>Par Jean Forteroche, acteur et écrivain</p>
      </header>
      
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/admin/">Gestion des épisodes</a></li>
          <?php if ($user->isAuthenticated()) { 

            ?>
          
          <li><a href="/admin/news-insert.html">Ajouter un épisode</a></li>
          <li><a href="/admin/deconnexion">Déconnexion</a></li>
          <?php } ?>
        </ul>
      </nav>
      
      <div id="content-wrap">
        <section id="main">
          <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          <?= $content ?>
        </section>
      </div>
    
      <footer></footer>
    </div>


  </body>
</html>
