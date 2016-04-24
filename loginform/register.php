<?php include "connection.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
 
<title> User register </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body> 

<div id="main">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
     
     $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
      
     if(mysql_num_rows($checkusername) == 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Atvainojiet, šāds lietotājvārds jau eksistē. Lūdzu <a href=\"index.php\"> BACK </a> un mēģhiniet vēlreiz.</p>";
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
     
   <h1>Reģistrācija</h1>
     
   <p>Lūdzu ievadiet reģistrācijas datus.</p>
     
    <form method="post" action="register.php" name="registerform" id="registerform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    <?php
}
?>
 
</div>
</body>
</html>