


<?php 

include('conexion.php');

$sql=mysql_query("SELECT * FROM album",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
    	$id=$row[0];
    	echo '<div id=listm>';
    	echo "<img src='media/img/ZX.png' width='14px'><strong>".$row[3]."</strong><br>";

    	echo "<img id='logo' src=media/audio/".$row[5]." width='100px' height='100px'><br>";
    	    
    	echo "<img src='media/img/Al.png' width='14px'>". $row[1]."<br>" ;
    	echo "<img src='media/img/fe.png' width='14px'>".$row[2]."<br>" ;

    	echo '</div>';
    	
    	    }
 }

//echo "<a id='mi'href='index.php?id=".$id."'>mi</a>";


?>

<form name="formu">
<input type="radio" name="valora" onClick="xx();" class="regular-radio" value="1" />xx<br />
<input type="radio" name="valora"onClick="xx();" value="2" />Regular<br />
<input type="radio" name="valora" value="buena" />Buena <br />
<input type="radio" name="valora" value="muy buena" />Muy buena
]
</form>
