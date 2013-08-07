    <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src='jquery1.8.3.js'></script>
        <script type="text/javascript" src='p.js'></script>
       
    </head>
 <?php  
 $cabello=$_GET['cab'];

 if ($cabello =='0') {
    $is=rand(0, 4);
     switch ($is) {
    case 0:
        echo '<li>Tu cabello es cafe?</li><li><a id="cafes" href="#">Si</a><li/>';
        break;
     case 1:
        echo '<li>Tu cabello es negro?</li><li><a id="negros" href="#">Si</a><li/>';
        break;

    case 2:
        echo '<li>Tu cabello es azul?</li><li><a id="azuls" href="#">Si</a><li/>';
        break;

    case 3:
        echo '<li>Tu cabello es rubio?</li><li><a id="rubios" href="#">Si</a><li/>';
        break;

     case 4:
        echo '<li>Tu cabello es rojo?</li><li><a id="rojos" href="#">Si</a><li/>';
        break;



    }
 }
$sexo=$_GET['sex'];
//1a cabello
 if ($sexo == '0' && $cabello =='1' ) {
 $is=rand(0, 1);
     switch ($is) {

     case 0:
        echo '<li>Tu eres hombre?</li><li><a id="hombres" href="#">Si</a><li/>';
        break;
         case 1:
        echo '<li>Tu eres mujer?</li><li><a id="mujeres" href="#">Si</a><li/>';
        break;

     }


 }
$tez=$_GET['tez'];
//1 a sexo y cabello
 if ($sexo == '1' &&  $tez =='0' ) {
 $is=rand(0, 1);
     switch ($is) {

     case 0:
        echo '<li>Tu tez es blanca?</li><li><a id="tblanca"href="#">Si</a><li/>';
        break;
         case 1:
        echo '<li>Tu tez es morena?</li><li><a id="tmorena" href="#">Si</a><li/>';
        break;

     }


 }
$obja=$_GET['obja'];

 if ( $tez =='1'&& $obja =="0" ) {
 $is=rand(9, 21);
     switch ($is) {

    
         case 9:
        echo '<li>Traes un balon?</li><li><a id="balon" href="#">Si</a><li/>';
        break;
         case 10:
        echo '<li>Traes una banda?</li><li><a id="banda"  href="#">Si</a><li/>';
        break;

          case 11:
        echo '<li>Traes una pelota chica?</li><li><a id="pelota" href="#">Si</a><li/>';
        break;
        case 12:
        echo '<li>Traes un gorro?</li><li><a id="gorro" href="#">Si</a><li/>';
        break;
        case 13:
        echo '<li>Traes una cachucha?</li><li><a id="cachucha" href="#">Si</a></li>';
        break;
        case 14:
        echo '<li>Traes un googles?</li><li><a id="googles" href="#">Si</a><li/>';
        case 15:
        echo '<li>Traes una casco?</li><li><a id="casco" href="#">Si</a><li/>';
        break;
        
        case 16:
        echo '<li>Traes unos esquies?</li><li><a id="esquies" href="#">Si</a><li/>';
        break;
        case 17:
        echo '<li>Traes unos tacos?</li><li><a id="tacos" href="#">Si</a><li/>';
        break;
        case 18:
        echo '<li>Traes un palo de golf?</li><li><a id="golf" href="#">Si</a><li/>';
        break;
        case 19:
        echo '<li>Traes un palo de hokie?</li><li><a id="hokie" href="#">Si</a><li/>';
        break;
        case 20:
        echo '<li>Traes tenis?</li><li><a id="tenis" href="#">Si</a><li/>';
        break;
        case 21:
        echo '<li>Traes una raqueta?</li><li><a id="raqueta" href="#">Si</a><li/>';
        break;
       

     }


 }

?>