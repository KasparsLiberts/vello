<?php

function updateXML(){
    $xml = '<?xml version="1.0" encoding="utf-8"?>
    ';
    $xml .= '<?xml-stylesheet href="vello.css"?>
    ';
    $xml .= '<rss version="2.0">
    ';
    $xml .= '<channel>
    ';
    $xml .= '<chtitle> Vello jaunumi </chtitle>
    ';
    $xml .= '<chdescription> Vello jaunumi par un ap vello lietām </chdescription>
    ';

    
    $query = "SELECT * FROM rss ORDER BY id DESC LIMIT 0,20;";
    $result = mysql_query($query);
    while($row = mysql_fetch_assoc($result)){
        
        $xml .= '<item>
        ';
        $xml .= '<title>'.$row['title'].'</title>
        ';
        $xml .= '<description>'.$row['description'].'</description>
        ';
        $xml .= '<link>'.$row['link'].'</link>
        ';
        $xml .= '<date>'.$row['autodate'].'</date>
        ';
        $xml .= '</item>
        ';
        
    }
    
    $xml .= '</channel>
    ';
    $xml .= '</rss>
    ';
    
    $file = fopen('jaunumi.xml', "w+");
    fwrite($file, $xml);
    fclose($file);
}

?>