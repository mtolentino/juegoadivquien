   <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src='jquery1.8.3.js'></script>
        <script type="text/javascript" src='p.js'></script>
    </head>
<div>
        <?php 
        include('conexion.php');
include('conexion.php');
 session_start();

$RR=$_SESSION['r'];

     $R=$_GET['nom'];
     echo $R;
echo $RR;
     if ($R!=$RR) {
       echo '<div id="no">no soy <b>PERDISTE</b>!! X(<br>Soy <img src="'.$_SESSION["img"].'"></div>';
        header( "refresh:1;url=cues.php" );
     }
     if($R==$RR)
     {
        echo '<div id="si"><b>Felicidades Yo Soy!!<b><br><img src="'.$_SESSION["img"].'"></div>';
        header( "refresh:1;url=cues.php" );
     } 

   
 

         
          
  ?>

    