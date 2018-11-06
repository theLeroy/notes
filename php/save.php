<?php
  include 'pwarray.php';
  session_start();

  if (is_numeric($_GET["page"])) {
    $page = $_GET["page"];
  }else {
    $page = 1;
  }
    // if (in_array($pw, $identificationCodespw)) {
    // if ($_SESSION['loggedin'] == true) {

    if (in_array($_SESSION['user_pw'], $identificationCodespw)) {
      $noteconter = $page;
      $dirname = "../usersnotes/" . $_SESSION['user_pw'] . "-notes";
      $filename = "". $dirname ."/" . $noteconter . "-". $_SESSION['user_pw'] . "-notes.txt";
      $noteimput = $_POST['note'];



                if (file_exists($filename)) { //Wens Tsfile scho git.. hie neus adde..
                  $buffer = $_POST['note'];
                  file_put_contents($filename, $buffer);
                  echo $obuffer;
                  echo "<script> alert('Gespeichert!')
                          window.location.replace(\"http://n.9k1.co/php/note.php?page=$page\");
                        </script>";
                } else { //Wens Tsfile noni git..
                  echo "<script> alert('Nicht Gespeichert. Das File konnte nicht gefunden Werden.')</script>";

                  echo "<script> alert('$noteimput - - - - - - - - - - - - Kopiere diesen Text. Um ihn nicht nochmals schreiben zu müssen.')
                          window.location.replace(\"http://n.9k1.co/php/note.php?page=$page\");
                        </script>";
                }


    } else {
      // echo "<script> alert('Du bisch ni de wo de sötisch si..')</script>";
      // header("Location: http://n.9k1.co/"); /* Browser umleiten */
      echo "<script> alert('Du bisch ni de wo de sötisch si.. oder öpis isch schiefgloffe.. ')
            </script>";

      echo "<script> alert('$noteimput - - - - - - - - - - - - Kopiere diesen Text. Um ihn nicht nochmals schreiben zu müssen.')
              window.location.replace(\"http://n.9k1.co\");
            </script>";
    }



?>
