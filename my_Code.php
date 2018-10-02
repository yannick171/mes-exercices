<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Unbenannt</title>
</head>
<body>
<P><FONT face=Arial size=5><STRONG>Sportlerdatenbank</STRONG></FONT></P>
<P><FONT face=Arial>Zeige alle Sportler, die folgende Kriterien 
erfüllen:</FONT></P>
<P><FONT face=Arial>
<form action="dummy.php" method="post">
<TABLE>
  
  <TR>
    <TD>Verein:</TD>
    <TD>Sportart:</TD></TR>
  <TR>
    <TD>
		<SELECT size=1 name=verein>
			<option value=0>egal</option>
			<option value=1>ATSV Neustadt</option>
			<option value=2>SV Sesamstrasse</option>
			<option value=3>TUS Entenhausen</option>
		</SELECT>
		</TD>
    <TD>
		<SELECT size=1 name=sportart>
			<option value=0>egal</option>
			<option value=1>Ballett</option>
			<option value=2>Fußball</option>
			<option value=3>Handball</option>
			<option value=4>Volleyball</option>
		</SELECT>
		</TD>
	</TR>
	<tr>
		<td colspan="2"><br><br><input type="submit" value="Zeig's mir!!"></td>
	</tr>
</TABLE>
</form>
	
</FONT>
<p>
Folgende Spieler üben Fußball im Verein SV Sesamstrasse aus:
	<?php
	if((!isset($_POST['verein'])OR (!isset($_POST['sportart']))){
		
		//if($_POST['verein']==1 AND $_POST['sportart']==1){
			
			// Connexion à la base de données
       
          
	         $bdd = new PDO('mysql:host=dedi297.your-server.de;dbname=constd_onlinetest;charset=utf8', 'constd_96_r', 'Jjxx28d9uiA5ZGdY');
     
         
            // Récupération des 10 derniers messages
			$reponse = $bdd->query('SELECT vorname, name,email FROM spieler WHERE verein_id==3 AND sportart_id==4 ORDER BY vorname');
			
			while ($donnees = $reponse->fetch())
							{
						echo '<p><strong>' . htmlspecialchars($donnees['vorname']) . '</strong> : ' . htmlspecialchars($donnees['name']) .htmlspecialchars($donnees['email']. '</p>';
							}

				$reponse->closeCursor();
					}
			
		}

?>
<p>Graf Zahl<br>
<a href="grafzahl@123.com">grafzahl@123.com</a>
</p>
<p>Krümel Monster<br>
<a href="kruemel@monster.de">kruemel@monster.de</a>
</p>
</P>
	
</body>
</html>
