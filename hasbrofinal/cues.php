   <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src='jquery1.8.3.js'></script>
   <!--     <script type="text/javascript" src='p.js'></script>-->
    </head>
    <?php
include('conexion.php');

        //echo "<label>".$nom."</label><br>";
echo '<a href="start.php?f=0">Cambiar</a>';

//VARIABLES MAGICAS


$pelo=$_GET['cpelo'];

 switch ($pelo) {
    case 'CAFE': 
     
?>

    <script type="text/javascript">
$(document).on("ready",inicial)
function inicial () {
  $("#yo").on("load", res);

}
var ocult=
  {         
    display :"none",
    overflow:"hidden",        
  };


function res()
{ 

  $("#yo").css(ocult);
}


    </script>

 <?php        break;

      }
///


//variable id
$f=$_GET['f'];

        if($f<='0'){
         
        $f=rand(1, 24);
              $sql=mysql_query("SELECT * FROM personajes where id=$f",$con);
         
       
    while ($row = mysql_fetch_row($sql)) {
      $per=$row[1];
  //echo $per;
//nombre
      $xn=$row[1];
    
      //puntos
$_SESSION['img']  = $row[10];
      $xpunt=$row[9];
      echo '<section id="yo1">';
      echo '<div id="yo"><strong>YO</strong><br><img  src="'.$row[10].'">';
      
  echo  '</div>';

       }
 } 

        

        elseif ($f>'') {
          
         $f=$_GET['f'];

               $sql=mysql_query("SELECT * FROM personajes where id=$f",$con);
         if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
      $per=$row[1];
  //echo $per;
//nombre
      $xn=$row[1];
    
      //puntos
$_SESSION['img']  = $row[10];
      $xpunt=$row[9];
      echo '<section id="yo1">';
      echo '<div id="yo"><strong>YO</strong><br>'.$f.$per.'<img  src="'.$row[10].'">
   </div>';
  
       }
 } 
        }

// $f=rand(1, 24);
// $xmen='where id='.$f;

//$_SESSION['r']  = $f;
       
     
echo'<div id="iframe">';
 include('iframe.php');
 echo '</div>';

?>
        
   

  

