<?php include "connection.php"; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>VELLO</title>
    <style type="text/css"> </style>
    <link rel="stylesheet" type="text/css"  href="vello.css" href="vello2.css"/>
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
        <p><a href="index.php" class="active">  Sākums </a> </p>
        <p><a href="Par mums.php" > Par mums </a> </p>
        <p><a href="Jaunumi.php" class="active1"> Jaunumi </a> </p>
        <p><a href="Valuta.php"> Valūtas kursi </a> </p>
        <p><a href="Veikals.php"> Veikals </a></p>
        <p><a href="Noma.php"> Noma </a> </p>
        <p><a href="Darbnica.php"> Darbnīca</a></p>
        <p><a href="Vello vesture.php"> Vello vēsture</a> </p>
        <p><a href="Noderigi.php" > Noderīgi</a></p>
        <p><a href="Musu kontakti.php" > Mūsu kontakti </a> </p>
        <p><a href="rsslapa.php" > RSS </a> </p>
        

      </h1>
    </div>
    
        <div id="content-2">
        
            <div id="content-2-1" align="justify">
            
            <h2 id="h2">
                Radošā velosipēdu darbnīca apvieno pilna cikala velo pieredzi sākot ar velo iegādi,
                apkopi, uzturēšanu, remontu, aprīkojumu, nomu un vērtīgus profesionāļu ieteikumus.
              Mūs var satikt<br />
              ne tikai 
                Miera ielā, bet arī visos velo pasākumos<br />
              un sabiedriskajās aktivitētēs,  
                kur iesaistīta pedāļu <br />
                mīšana un aktīvs dzīves veids.<br />
                <br />
                Mūsu devīze: <br />
                Dzīves prieks un kvalitāte maksā mazāk<br />
                nekā jūs domājat!<br />
                <br />
                Mūsu misija: <br />
                Katram savus pedāļus!
              </h2>
          </div>
             
            <div id="content-2-2" align="justify">
              <h3 align="center">Vello dienas ziņa</h3>
              <p> Ikdienas pārvietošanās ar divritetni rosina jūtīgāku un pilnvērtīgāku 
                   vides uztveri, ļauj dziļāk izjust pilsētu un veicina arī sociālo mijiedarbību un integrāciju,
                    — pie šādiem secinājumiem savā rakstā nonācis vietradis Jānis Ķīnasts, mudinot arī Rīgai vairāk 
                    rūpēties par veloinfrastruktūras attīstību.
              </p>
              <p> «Tikai braucot ar divriteni ir iespējams vislabāk apgūt savas zemes kontūras, jo katrā kalnā ir 
                  jātiek caur sviedriem, lai lejā varētu jau ripot. Tu viņus atcerēsies, kādi tie patiesi ir, kamēr 
                  automašīnā tikai augstākais kalns Tev liksies iespaidīgs, līdz ar to laupot iespēju, savu zemi 
                  atcerēties akurāti, kas ir lielākais ieguvums no riteņbraukšanas.»
        </p>
        <p align="center">/Ernests Hemingvejs/ 
        </p>
      </div>
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