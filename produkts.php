
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
       <h1> Jauna produkta pievienošana </h1>



       <div id="forma2">

      <table align="center">

        <form method="post" enctype="multipart/form-data" action="insert.php">
        <tr>
            <th><label for="name">Nosaukums:</label></th>
            <th><input style="color: black" type="text" name="name" size="35" placeholder="Nosaukums"/></th>
        </tr>
        <tr>
          <th><label for="category">Kategorija:</label></th>
          <th><input type="text" name="category" size="35" placeholder="Kategorija"/></th>
        </tr>
        <tr>
          <th><label for="price">Cena:</label></th>
          <th><input type="text" name="price" size="35" placeholder="Cena" /></th>
        </tr>
        <tr>
          <th><label for="description_short">Apraksts īsais:</label></th>
          <th><input type="text" name="description_short" size="35" placeholder="Apraksts īsais" id="aprakstsbox"/> </th>
        </tr>        
        <tr>
          <th><label for="description_long">Apraksts pilnais:</label></th>
          <th><input type="text" name="description_long" size="35" placeholder="Apraksts pilnais" id="aprakstsbox"/> </th>
        </tr>
        <tr>
          <th><label for="image">Attēls:</label></th>
          <th><input type="file" name="image" size="35" placeholder="Pievienot attēlu" id="aprakstsbox"/> </th>
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