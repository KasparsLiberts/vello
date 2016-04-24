<?php include "connection.php"; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>VELLO</title>
    <style type="text/css"> </style>
    <link rel="stylesheet" type="text/css" href="vello.css" />
    <meta name="keywords" content="Velo, Kultūra, Nopirkt, Pārdot, Saremontēt, Izīrēt " />
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


    <div id="head2">
       <h1 >Reģistrācija</h1>




       <?php
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
     
    $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
      
     if(mysql_num_rows($checkusername) == 1)
     {

        echo "<p>Atvainojiet, šāds lietotājvārds jau eksistē. Lūdzu mēģhiniet vēlreiz.</p>";

     }
     else
     {
        $registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
      {
        echo "<p>Jūsu konts tika veiksmīgi izveidots. Lūdzu <a href=\"index.php\"> autorizēties Šeit... </a> </p>";
      }
        else
        {
          echo "<p> Reģistrēties neizdevās. Lūdzu mēģiniet vēlreiz. </p>";    
        }       
     }
}
else
{
    ?>
     
  
     
    <?php
}
?>

       <div id="forma2">

      <table align="center", >

        <form method="post" action="register2.php" name="registerform" id="registerform">

        <tr>
            <th><label for="username">Lietotājs:</label></th>
            <th><input style="color: black" type="text" name="username" id="username" /></th>
        </tr>
  
        <tr>
          <th><label for="password">Parole:</label></th>
          <th><input type="password" name="password" id="password" /></th>
        </tr>

        <tr>
          <th><label for="email">E-pasts:</label>
          <th><input type="text" name="email" id="email" /></th> 
        </tr>

        <tr><th><input type="submit" name="register" id="register" value="Apstiprināt" /></th>
        </tr>

          </form>
       
        </table>
      </div>
    </div>





   
    <div id="footer">
    <div id="kontakti_footer" align="center" >
     Tel.+371 26368522 | <a href="mailto:vello@vello.lv" style="color: white" >vello@vello.lv </a>
    </div>
  </div> 
</div>

</body>

</html>