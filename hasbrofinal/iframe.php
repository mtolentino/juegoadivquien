 <head>
        <title>Adivina Quien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
      <!-- <script type="text/javascript" src='jquery1.8.3.js'></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        -->
         <script> 
        function cargar(){
          var cab = $("#cab").val();
          //var cab = $("#sex").val();
            //var url="response.php?cab="+cab
            form = $("#form").serialize();
            var url="response.php?"
            $.ajax({   
                type: "GET",
                url:url,
                data:form,
                success: function(datos){       
                    $('#yo4').html(datos);
                }
            });
        }
     </script>
    </head>
<?php 
include('conexion.php');
//preguntar
 $c='cpiel';
       $T='MORENA';
 
      
 $sql=mysql_query("SELECT * FROM personajes where $c <>'$T'",$con);
         if (mysql_num_rows($sql) > 0) {
    
    while ($row = mysql_fetch_row($sql)) {
     //echo $xz=$row[0];
      $cpi=$row[3];

  


  }

}

 echo '<li><a id="pre" href="#" onclick="cargar();">Preguntarme !!</a></li><br>';
 echo '<ul id="yo4">';
 
   echo  '</ul>';


  ?>
  <form id='form'>
<input id='cab' value='0' type='hidden' name='cab' >
<input id='sex'value='0' type="hidden" name='sex' >
<input id='tez'value='0' type="hidden" name='tez' >
<input id='obja'value='0' type="hidden"  name='obja' >

</form>