<?php include "connection.php"; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
		<title>VELLO noderigi</title>
		<style type="text/css">	</style>
		<link rel="stylesheet" type="text/css" href="vello2.css" />
		<meta name="keywords" content="Velo, 
		Kultūra, Nopirkt, Pārdot, Saremontēt, Izīrēt " />
</head>

<body>

<div id="body">
    <div id="header">

		<div id="logo">
			<table>
  				<tr>
  					<td>
  						<a href="index.php">
  						<img src="bildes/logo_portalam.png" alt="logo" width="153" height="135" />
  						</a>
  					</td>
				</tr>
			</table>
		
		</div>
    </div>

        <div id="head3">



      <?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
 <div id="veikmigaaut">


     <p> Esat autorizējies kā <code><?=$_SESSION['Username']?></code>.<a href="logout.php">Iziet</a></p>



  </div>   
      
     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
         

        echo "<p>Autorizēšanās veiksmīga!</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {

        echo "<p>Atvainojiet šāds konts neeksistē!
         <a href=\"index.php\" > Mēģiniet vēlreiz. </a> </p>";
    }
}
else
{
    ?>
     
       <div id="forma">


      <table>
        <form method="post" action="index.php" name="loginform" id="loginform">
        <tr>
            <th>Lietotājs</th>
            <th>Parole</th>
        </tr>
  
        <tr>
            <th><input style="color: black" type="text" name="username" id="username" size="15" />  </th>
            <th><input type="password" name="password" id="password" size="15" /> </th>
            <th> <input type="submit" name="login" id="login" value="Autorizēties" /></th>
            <th> <a href="register2.php" style="color: white" >Reģistrēties</a> </th>
            </form>



            <th><form action="search.php" method="get"> <input type="text" name="search" size="21" /> 
              <input type="submit" value="Meklēt" />
          </form></th>
      
        </tr>
        </table>
      </div>



   <?php
}
?>

    </div>
    <div id="main">


      <div id="content-1"> 
          <h1 id="h1">
        <p><a href="index.php"> Sākums </a> </p>  
        <p><a href="rsskanals.php" > Pievienot RSS ziņu </a> </p>

      </h1>
    </div>

 		<div id="content-2">

            <div id="content-2-1" align="justify">
              <br>
              <p> <b>Vello RSS kanāli </b></p>
            
              <p><a href="jaunumi.xml"> 1. Vello jaunumi</a></p>
              <p><a href="produkti.xml"> 2. Produktu jaunumi</a></p>

        	</div>
             

    	</div>

	</div>
	<div id="footer">
	<div id="kontakti_footer" align="center" >
				 Tel.+371 26368522 | <a href="mailto:vello@vello.lv" style="color: white">vello@vello.lv </a>
	</div>
</div>
</div>

</body>

</html>