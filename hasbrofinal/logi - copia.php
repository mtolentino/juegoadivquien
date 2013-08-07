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
 session_start();

$RR=$_SESSION['r'];

     $R=$_GET['nom'];
     echo $R;
echo $RR;
     if ($R!=$RR) {
       echo '<div id="no">no soy <b>PERDISTE</b>!! X(<br>Soy <img src="'.$_SESSION["img"].'"></div>';
        header( "refresh:2;url=cues.php" );
     }
     if($R==$RR)
     {
        echo '<div id="si"><b>Felicidades Yo Soy!!<b><br><img src="'.$_SESSION["img"].'"></div>';
        header( "refresh:2;url=cues.php" );
     } 

     //////////////////////
           $sql=mysql_query("SELECT * FROM personajes ",$con);
         if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
      $per=$row[1];

      $xn=$row[1];
      //sex
      $xs=$row[2];
      //color piel
      $xcp=$row[3];
      //color pelo
      $xcpel=$row[4];
      //accesorio1
      $xac1=$row[5];
       //accesorio2
      $xac2=$row[6];
       //color ropa
      $xcr=$row[7];
       //deporte
      $xdep=$row[8];
      //puntos

      $xpunt=$row[9];
     
         }
 } 
 

         
          
  ?>

    