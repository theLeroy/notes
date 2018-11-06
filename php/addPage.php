<!DOCTYPE html>

<?php
  include 'pwarray.php';
  session_start();


  $i = 0;
    // if (in_array($pw, $identificationCodespw)) {
    // if ($_SESSION['loggedin'] == true) {

    if (in_array($_SESSION['user_pw'], $identificationCodespw)) {
      // if eingelogt
      $dirname = "../usersnotes/" . $_SESSION['user_pw'] . "-notes";
      // name des Ordners

      foreach (new DirectoryIterator($dirname) as $fileInfo) {
        if($fileInfo->isDot()) continue;
        $i++;
      }
      // Anzahl bereits existierender Seiten herausfinden
      $noteconter = $i+1;
      // Globale Variable für nummer der neuen Seite.

      $filename = "". $dirname ."/" . $noteconter . "-". $_SESSION['user_pw'] . "-notes.txt";


      if (file_exists($dirname)) {
        echo "<script>console.log('Du hesch schone Ortner.') </script>";
      } else {
        // mkdir("" . $dirname . "", 0700);
        echo "es existiert kein Ordner für diese Datei";
      }

                if (file_exists($filename)) { //Wens Tsfile scho git.. hie neus adde..
                  echo "Error! diese Seite existiert schon";
                } else { //Wens Tsfile noni git..
                  $output = "Meine $noteconter. Seite! 👌";
                  echo $output;
                  $myfile = fopen($filename, "w") or die("Ich kann das File nicht Öffnen");
                  $txt = $output;
                  fwrite($myfile, $txt);
                  fclose($myfile);
                  echo "<script>
                          window.location.replace(\"http://n.9k1.co/php/note.php?page=$noteconter\");
                        </script>";
                }

    }
?>
