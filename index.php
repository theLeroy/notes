<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- .................................sheets.................................-->
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.min.css?ts=<?php echo time(); ?>">
    <link rel="stylesheet" href="style/responsive.css?ts=<?php echo time(); ?>">
    <script src="js/index.js"></script>
    <script src="js/consolinfo.js"></script>
    <!-- .................................Fonts .................................-->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700" rel="stylesheet">
    <!-- .................................Meta Tags.................................-->
    <title>Notes</title>
    <meta name="Gratis und sicher Online Notizen erstellen." content="Gratis und sicher Online Notizen erstellen.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="9k1 Team">
    <meta name="description" content="Your free and save online notes.">
    <meta name="keywords" content="Notes,Notizen,gratis,Free,Save,Share,note,">

    <!--.................................favicon.................................-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    </head>
  <!--.................................start Body.................................-->
  <body>
    <img class="bodybackground hideonmobile" alt="hintergrund" src="img/Frontpage1.0.png">
    <div class="alertbox">
      <form method="POST" action="php/login.php">
        <input onfocus="if(this.value == 'identification') { this.value = ''; }" class="identification" type="text" name="password" value="identification">
        <input type="submit" class="absenden" name="Absenden" value="Absenden">
      </form>
    </div>
    <a class="hideonmobile" href="https://www.9k1.co/">
      <div class="Addnewuser">
          <div class="adduserlink">
            <div class="addtext">
              Erfasse einen neuen Benutzer auf unserer main Page.
            </div>
          </div>
      </div>
    </a>


  </body>
</html>
