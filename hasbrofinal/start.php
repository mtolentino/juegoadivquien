<!--
tec adivina quien
-->
<?php  

$nom=$_GET['nombre'];

include('conexion.php');




//echo "<a id='mi'href='index.php?id=".$id."'>mi</a>";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src='jquery1.8.3.js'></script>
        <script type="text/javascript" src='p.js'></script>
       
    </head>
    <body style="background:url('b.jpg');">
        <header id='mini'>
          
           <img src="he.png" width="8%">
            <label style='color:white;'> Hola:<b> <?php echo $nom;?></b></label>
       </header>
       <div>
       <?php include("cues.php");?>
   <div id="yo2"><strong>Compu</strong><br><img  src="ord.gif"><?php echo $f2;?></div>
    </section>
      

       </div>

       <div id='tablero'>
        <?php include('tablero.php');?>
        </div>

    </body>

</html>

