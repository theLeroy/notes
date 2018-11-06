<!DOCTYPE html>

<?php
  include 'pwarray.php';
  session_start();


  if (is_numeric($_GET["page"])) {
    $page = $_GET["page"];
  }else {
    $page = 1;
  }
  echo "<script>console.log($page)</script>";
    // if (in_array($pw, $identificationCodespw)) {
    // if ($_SESSION['loggedin'] == true) {

    if (in_array($_SESSION['user_pw'], $identificationCodespw)) {
      $noteconter = $page;
      $dirname = "../usersnotes/" . $_SESSION['user_pw'] . "-notes";
      $filename = "". $dirname ."/" . $noteconter . "-". $_SESSION['user_pw'] . "-notes.txt";


      if (file_exists($dirname)) {
        echo "<script>console.log('Du hesch schone Ortner.') </script>";
      } else {
        mkdir("" . $dirname . "", 0700);
      }

?>
<html>
<head>
  <meta charset="utf-8">
  <title>Deine Notizen</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <div class="notetext">
    <form method="POST" action="save.php?page=<?php echo $page; ?>">
      <textarea class="yournotes" type="text" name="note" value="">
<?php


                if (file_exists($filename)) { //Wens Tsfile scho git.. hie neus adde..
                  $buffer = "";
                  $obuffer = file_get_contents($filename);
                  $buffer = $obuffer . $buffer;
                  file_put_contents($filename, $buffer);
                  echo $obuffer;
                } else { //Wens Tsfile noni git..
                  $error ="Oh nein 😱 \\n Diese Seite existiert nicht!";
                }
?>
</textarea>
<button class="Submitbutton" type="submit" name="save">speichern</button>
</form>
<div class="pagesList">
  <a class="pItem" href="addPage.php" data-page="1">+</a>
  <?php
  $i = 0;
  foreach (new DirectoryIterator($dirname) as $fileInfo) {
    if($fileInfo->isDot()) continue;
    $name =  $fileInfo->getFilename();
    $i++;
    echo '<a class="pItem" href="note.php?page='.$i.'" data-page="'.$i.'">'.$i.'</a>';
}
    // foreach ($files as $file) {
    //   $i++;
    // }
   ?>
</div>
<?php


    } else {
      // echo "<script> alert('Du bisch ni de wo de sötisch si..')</script>";
      // header("Location: http://n.9k1.co/"); /* Browser umleiten */
      echo "<script> alert('Du bisch ni de wo de sötisch si.. oder öpis isch schiefgloffe.. ')
              window.location.replace(\"http://n.9k1.co\");
            </script>";
    }



?>
<?php if (isset($error)): ?>
  <script type="text/javascript">
    alert("<?php echo $error; ?>");
    window.location.replace("http://n.9k1.co/php/note.php?page=1");
  </script>
<?php endif; ?>
<style media="screen">
  body {

  }
  *{
    box-sizing: border-box;
  }
  .yournotes {
    line-height: 1.55;
    font-size: 15px;
    width: 100%;
    height: 94vh;
    border-color: none;
    border: none;
    shape-outside: none;
    font-family: 'Roboto', sans-serif;
  }
  .Submitbutton {
    font-size: 15px;
    background-color: rgba(137, 50, 231, 0.5);
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
    position: relative;
    z-index: 900;
  }
  ::selection {
  background: rgba(137, 50, 231, 0.3); /* WebKit/Blink Browsers */
}
::-moz-selection {
  background: rgba(137, 50, 231, 0.3); /* Gecko Browsers */
}
textarea:focus {
  border-color: rgba(137, 50, 231, 0.3);
  box-shadow: none;
  outline: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.pagesList{
  position: absolute;
  left: 0;
  bottom: 6px;
  width: 100%;
  padding-right: 6px;
}
.pItem{
  width: 100px;
  margin-left: 10px;
  float: right;
  background: rgba(137, 50, 231, 0.5);
  color: black;
  font-family: sans-serif;
  text-align: center;
  padding: 10px 0px;
  text-decoration: none;
}

.Submitbutton:focus {
  border-color: rgba(137, 50, 231, 1);
  box-shadow: none;
  outline-color:  rgba(137, 50, 231, 1);
  -webkit-box-shadow: rgba(137, 50, 231, 1);
  -moz-box-shadow: rgba(137, 50, 231, 1);
  box-shadow: rgba(137, 50, 231, 1);
}
</style>

<script type="text/javascript">
window.onbeforeunload = function() {
   $('textarea').each(function(){
      var id = $(this).attr('id');
      var value = $(this).val();
     localStorage.setItem(id, value);
  });
}
window.onload = function() {
  $('textarea').each(function(){
     var id = $(this).attr('id');
     var text2 = localStorage.getItem(id);
     if (text2 !== null) $('#'+id).val(text2);
  });
}
</script>
</body>
</html>
