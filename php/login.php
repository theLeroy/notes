    <?php

    session_start();
    include 'pwarray.php';

    $errors = '';

    if( isset( $_POST['password'])) {
      	// $pw = sha1( $_POST['password']);
        $pw =  $_POST['password'];
        $identification =  $_POST['password'];
        // $identificationCodespw = array("dfg.co", "asdsad.co"); //rächt duum! aber dumm isch cool!!

        $ip = $_SERVER['REMOTE_ADDR'];
        $file = "Loggfiles.txt";
        $buffer = " ". date('d-m-Y G-i-s') . ": IP des Loggins: ".$ip." Identification code: ".$identification." \n";

        if (file_exists($file)) {
          $obuffer = file_get_contents($file);
          $buffer = $obuffer . $buffer;
          file_put_contents($file, $buffer);
        }



        if (in_array($pw, $identificationCodespw)) {
          echo "<script> alert('Achtung Errororoooorrrrr!!')</script>";
          $_SESSION['loggedin'] = true;
          $_SESSION['user_pw'] = $pw;
          $_SESSION['user_identification'] = $identification;
          $_SESSION['user_ip'] = $ip;
          header('Location: http://n.9k1.co/php/note.php');

        } else {
          // echo "<script> alert('Du bisch ni de wo de sötisch si..')</script>";
          // header("Location: http://n.9k1.co/"); /* Browser umleiten */
          echo "<script> alert('Du bisch ni de wo de sötisch si..')
                  window.location.replace(\"http://n.9k1.co\");
                </script>";
        }




    	} else {
        echo "<script> alert('Du bisch ni de wo de sötisch si..')
                window.location.replace(\"http://n.9k1.co\");
              </script>";
    	}



    ?>
