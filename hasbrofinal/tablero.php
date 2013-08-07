   <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src='jquery1.8.3.js'></script>
        <!--<script type="text/javascript" src='p.js'></script>-->
    </head>


         <label id='title'>Selecciona y descarta</label>
        <form method='post' action='#'>

        <?php
        include('conexion.php');
        $iu=$_get['nan'];

        if($iu<='0')
        {



$sql=mysql_query("SELECT * FROM personajes",$con);

         if (mysql_num_rows($sql) > 0) {
    
    while ($row = mysql_fetch_row($sql)) {
      $per=$row[0];
      
     $i++;
  //echo $per;
      echo '<img class="ima" id="ima'.$i.'"src="'.$row[10].'">';
          }}
           }
  ?>

        </form>
     