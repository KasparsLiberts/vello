
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
       <h1> Norādiet RSS ziņas parametrus </h1>

       <div id="forma2">

      <table align="center">

        <form method="post" action="insertrss.php">

        <tr>
            <th><label for="title">Ziņas virsraksts:</label></th>
            <th><input style="color: black" type="text" name="title" size="35"  placeholder="Ziņas virsrakts"/></th>
        </tr>
        <tr>
            <th><label for="link">Saite uz ziņu</label></th>
            <th><input type="text" name="link" size="35" placeholder="Saite uz ziņu"/></th>
        </tr>
        <tr>
            <th><label for="description">Ziņas apraksts:</label></th>
            <th><input type="text" name="description" size="35" id="descriptionbox" placeholder="Īss ziņas apraksts"/> </th>
        </tr>
        <tr>
            <th><label for="content">Ziņas saturs:</label></th>
            <th><input type="text" name="content" size="35" id="contentbox" placeholder="Ziņas saturs" /> </th>
        </tr>
            <tr><th><input type="submit" name="submit" value="Pievienot" /></th>
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